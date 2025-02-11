<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\Admin\ProductRequest;
class ProductController extends Controller
{
    private $view;
    private $route;
    private $product;
    public function __construct(){
        $this->view = "pages.admin.product.";
        $this->route = "dashboard.product.";
        $this->product = new Product();
    }

    public function index(){
        $product = Product::all();
        return view($this->view."index",[
            'product' => $product
        ]);
    }

    public function edit(string $id = null){
        $product = null;
        if($id){
            $product = Product::find($id);
        }
        return view($this->view."edit", [
            'product' => $product,
        ]);
    }

    public function store(ProductRequest $request)
    {
        $validatedData = $request->validated();

        $product = null;

        if ($request->has('id')) {
            $product = $this->product::findOrFail($request->id);
        }

        // Mengelola file upload
        if ($request->hasFile('image')) {
            $name = preg_replace('/\s+/', '', $product ? $product->name : $request->name);
            $fileName = $name . '_' . time() . '.' . $request->image->getClientOriginalExtension();
            $validatedData['image'] = $request->image->storeAs('product', $fileName, 'public');
        } elseif ($product && $product->image) {
            // Pertahankan file lama jika tidak ada file baru
            $validatedData['image'] = $product->image;
        }

        if ($product) {
            // Update produk jika ID tersedia
            $product->update($validatedData);
            alert()->html('Berhasil', 'Data berhasil diperbarui', 'success');
        } else {
            // Simpan produk baru jika ID tidak ada
            $this->product::create($validatedData);
            alert()->html('Berhasil', 'Data berhasil ditambahkan', 'success');
        }

        return redirect()->route($this->route . 'index');
    }

    public function single_destroy($id)
    {
        $data = $this->product::findOrFail($id);
        $data->delete();

        alert()->html('Berhasil', 'Data berhasil dihapus', 'success');
        return redirect()->route($this->route . 'index')->with('success', 'Produk berhasil dihapus!');
    }
}
