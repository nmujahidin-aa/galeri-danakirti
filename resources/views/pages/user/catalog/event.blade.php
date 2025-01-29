@extends('layouts.app')
@section('title', 'Event')
@section('styles')
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/post.min.css" />
@endsection
@section('data-page', 'post')
@section('data-overlay', '@@overlay')

@section('content')
<x-templates.user.pages-header
    title="Kegiatan"
    description="Nibh tellus molestie nunc non blandit. Mi tempus imperdiet nulla malesuada pellentesque elit"
    {{-- breadcrumb_name="Katalog"
    current="Berita" --}}
/>
<!-- Single post content start -->
<main class="post section">
    <div class="container">
        <div class="post_cover">
            <picture>
                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="cover" />
            </picture>
        </div>
    </div>
    <article>
        <div class="container container--narrow">
            <div class="post_info d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <div class="metadata metadata--info d-flex">
                    <span class="metadata_item d-flex align-items-center">
                        <i class="icon-calendar_day secondary icon"></i>
                        September 30, 2021
                    </span>
                    <a class="metadata_item d-flex align-items-center" href="#postComments">
                        <i class="icon-comments secondary icon"></i>
                        <span class="metadata_item-text">2 Comments</span>
                        <span class="metadata_item-number">2</span>
                    </a>
                </div>
                <ul class="socials d-flex align-items-center">
                    <li class="list-item">
                        <a
                            class="link d-inline-flex align-items-center justify-content-center"
                            href="https://facebook.com"
                            target="_blank"
                            rel="noopener norefferer"
                        >
                            <i class="icon-facebook icon"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a
                            class="link d-inline-flex align-items-center justify-content-center"
                            href="https://instagram.com"
                            target="_blank"
                            rel="noopener norefferer"
                        >
                            <i class="icon-instagram icon"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a
                            class="link d-inline-flex align-items-center justify-content-center"
                            href="https://twitter.com"
                            target="_blank"
                            rel="noopener norefferer"
                        >
                            <i class="icon-twitter icon"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a
                            class="link d-inline-flex align-items-center justify-content-center"
                            href="https://whatsapp.com"
                            target="_blank"
                            rel="noopener norefferer"
                        >
                            <i class="icon-whatsapp icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p class="post_text">
                Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus. Iaculis nunc sed augue lacus
                viverra vitae. In nibh mauris cursus mattis molestie. Suspendisse ultrices gravida dictum fusce ut placerat orci
                nulla. Pellentesque habitant morbi tristique senectus. Tortor aliquam nulla facilisi cras fermentum odio. Neque
                gravida in fermentum et sollicitudin ac orci.
            </p>
            <h2 class="post_header">Improving gastrointestinal symptoms</h2>
            <p class="post_text">
                Vulputate eu scelerisque felis imperdiet proin fermentum leo vel. Massa ultricies mi quis hendrerit. Purus sit amet
                volutpat consequat mauris nunc congue nisi. Aenean vel elit scelerisque mauris pellentesque. Netus et malesuada
                fames ac turpis egestas integer eget. Nunc non blandit massa enim nec dui nunc
            </p>
            <ul class="post_list">
                <li class="post_list-item">Massa massa ultricies mi quis hendrerit</li>
                <li class="post_list-item">Facilisi cras fermentum odio eu feugiat</li>
                <li class="post_list-item">Placerat vestibulum lectus mauris ultrices eros</li>
                <li class="post_list-item">Nullam non nisi est sit amet facilisis</li>
            </ul>
            <h2 class="post_header">Managing chronic pain</h2>
            <p class="post_text">
                Elit scelerisque mauris pellentesque pulvinar. Quam adipiscing vitae proin sagittis nisl. Tempor commodo ullamcorper
                a lacus vestibulum sed arcu non odio. In dictum non consectetur a. Nunc vel risus commodo viverra
            </p>
            <div class="post_quote">
                <q class="post_quote-text">
                    Aliquet risus feugiat in ante metus dictum at tempor. Id leo in vitae turpis massa sed elementum tempus egestas.
                    Placerat orci nulla pellentesque dignissim enim sit amet. Justo eget magna fermentum iaculis eu non diam
                    phasellus
                </q>
                <span class="post_quote-author">Tina Bradley</span>
            </div>
            <p class="post_text">
                Commodo viverra maecenas accumsan lacus vel facilisis volutpat. Nec tincidunt praesent semper feugiat nibh sed.
                Felis eget nunc lobortis mattis aliquam. Iaculis eu non diam phasellus vestibulum. Aliquam id diam maecenas
                ultricies mi eget mauris.
            </p>
            <h2 class="post_header">Supporting mental health</h2>
            <div class="post_highlight">
                <div class="post_highlight-wrapper d-md-flex justify-content-between">
                    <div class="post_highlight-block">
                        <p class="post_text">
                            Quisque non tellus orci ac auctor augue mauris augue neque. Lacus sed viverra tellus in hac habitasse
                            platea dictumst. Euismod elementum nisi quis eleifend quam adipiscing vitae proin.
                        </p>
                        <ul class="post_list ordered">
                            <li class="post_list-item d-flex align-items-start">
                                <span class="number">1.</span>
                                Lacus sed viverra tellus in hac habitasse platea dictumst
                            </li>
                            <li class="post_list-item d-flex align-items-start">
                                <span class="number">2.</span>
                                Gravida neque convallis a cras semper auctor neque vitae
                            </li>
                            <li class="post_list-item d-flex align-items-start">
                                <span class="number">3.</span>
                                Euismod elementum nisi quis eleifend quam adipiscing vitae proin. Massa tincidunt dui ut ornare
                                lectus
                            </li>
                            <li class="post_list-item d-flex align-items-start">
                                <span class="number">4.</span>
                                Lacus sed turpis tincidunt id aliquet risus feugiat in
                            </li>
                        </ul>
                    </div>
                    <div class="post_highlight-media">
                        <div class="post_highlight-media_img">
                            <picture>
                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                            </picture>
                        </div>
                        <p class="post_highlight-media_capture">
                            Purus ut faucibus pulvinar elementum. Et malesuada fames ac turpis
                        </p>
                    </div>
                </div>
                <p class="post_text">
                    Dui faucibus in ornare quam viverra orci sagittis eu. Libero nunc consequat interdum varius sit amet. Ut aliquam
                    purus sit amet luctus venenatis lectus. Pharetra pharetra massa massa ultricies mi quis. Egestas tellus rutrum
                    tellus pellentesque eu tincidunt tortor aliquam nulla. Lectus sit amet est placerat in
                </p>
            </div>
            <div class="post_tags d-sm-flex align-items-center">
                <h5 class="post_tags-header">Tags</h5>
                <ul class="post_tags-list d-flex flex-wrap">
                    <li class="list-item">
                        <a class="link d-inline-flex align-items-center justify-content-center" href="#">Vaping</a>
                    </li>
                    <li class="list-item">
                        <a class="link d-inline-flex align-items-center justify-content-center" href="#">Cannabis</a>
                    </li>
                    <li class="list-item">
                        <a class="link d-inline-flex align-items-center justify-content-center" href="#">Flower</a>
                    </li>
                </ul>
            </div>
        </div>
    </article>
    <div class="post_footer">
        <div class="container container--narrow">
            <div class="post_footer-author d-flex flex-column flex-sm-row align-items-lg-center">
                <picture>
                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                    <img
                        class="lazy post_footer-author_avatar"
                        data-src="img/placeholder.jpg"
                        src="img/placeholder.jpg"
                        alt="media"
                    />
                </picture>
                <div class="post_footer-author_about">
                    <h4 class="name">James Wagner</h4>
                    <p class="bio">
                        Nec ullamcorper sit amet risus nullam eget. Sed odio morbi quis commodo odio. Arcu cursus euismod quis
                        viverra. Sed adipiscing diam donec adipiscing.Tempor orci eu lobortis elementum nibh. Duis tristique
                        sollicitudin nibh sit amet commodo nulla facilisi
                    </p>
                </div>
            </div>
            <div class="post_footer-nav d-sm-flex justify-content-between">
                <div class="post_footer-nav_block post_footer-nav_block--prev d-flex flex-column">
                    <a class="nav-link nav-link--prev d-inline-flex align-items-center" href="#">
                        <i class="icon-caret_left icon"></i>
                        Previous Post
                    </a>
                    <a class="post-title" href="#"> Get the Best Out of Your Cannabis Experience </a>
                </div>
                <div class="post_footer-nav_block post_footer-nav_block--next d-flex flex-column align-items-end">
                    <a class="nav-link nav-link--next d-inline-flex align-items-center" href="#">
                        Next Post
                        <i class="icon-caret_right icon"></i>
                    </a>
                    <a class="post-title" href="#"> Factors in Choosing Cannabis Products </a>
                </div>
            </div>
        </div>
    </div>
    <section class="comments" id="postComments">
        <div class="container container--narrow">
            <h2 class="comments_header">2 Comments</h2>
            <div class="comments_item d-sm-flex">
                <picture>
                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                    <img class="lazy avatar" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                </picture>
                <div class="main">
                    <div class="panel d-flex flex-column flex-md-row align-items-md-center">
                        <div class="wrapper flex-grow-1 d-md-flex flex-md-row">
                            <h5 class="panel_name">Dawn Fowler</h5>
                            <span class="panel_timestamp">September 30, 2021 at 9:52 am</span>
                        </div>
                        <a class="panel_btn btn--underline" href="#">Reply</a>
                    </div>
                    <p class="text">
                        Quis blandit turpis cursus in hac habitasse platea dictumst. Ultricies integer quis auctor elit sed
                        vulputate mi sit amet. Scelerisque fermentum dui faucibus in ornare. Convallis posuere morbi leo urna
                        molestie at elementum. Quis auctor elit sed vulputate mi. In nulla posuere sollicitudin aliquam ultrices
                    </p>
                </div>
            </div>
            <div class="comments_item d-sm-flex" data-reply="true">
                <picture>
                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                    <img class="lazy avatar" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                </picture>
                <div class="main">
                    <div class="panel d-flex flex-column flex-md-row align-items-md-center">
                        <div class="wrapper flex-grow-1 d-md-flex flex-md-row">
                            <h5 class="panel_name">Charles Sanchez</h5>
                            <span class="panel_timestamp">September 30, 2021 at 10:58 am</span>
                        </div>
                        <a class="panel_btn btn--underline" href="#">Reply</a>
                    </div>
                    <p class="text">
                        Aliquam sem fringilla ut morbi tincidunt augue. Viverra aliquet eget sit amet tellus cras adipiscing enim
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="reply">
        <div class="container container--narrow">
            <h2 class="reply_header">Leave a Reply</h2>
            <form
                class="reply_form form d-flex flex-column flex-md-row flex-wrap justify-content-between"
                action="#"
                method="post"
                id="postReplyForm"
                data-type="postReply"
            >
                <div class="field-wrapper">
                    <label class="label" for="postReplyName">Your Name</label>
                    <input class="field required" type="text" id="postReplyName" placeholder="Your Name" />
                </div>
                <div class="field-wrapper">
                    <label class="label" for="postReplyEmail">Your Email</label>
                    <input class="field required" type="text" data-type="email" id="postReplyEmail" placeholder="you@example.com" />
                </div>
                <div class="field-wrapper fluid">
                    <label class="label" for="postReplyContent">Message</label>
                    <textarea
                        class="field field--message required"
                        id="postReplyContent"
                        placeholder="Type Your Message"
                    ></textarea>
                </div>
                <button class="btn" type="submit">Submit</button>
            </form>
        </div>
    </section>
</main>
@endsection
