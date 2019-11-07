@extends('docs.layouts.app')


@section('content')
    <div class="row">

        <!-- main page -->
        <main role="main" class="col-sm-12 col-md-9 offset-md-3 page" id="load_content" styale="display:none;">

            <!-- side bar -->
            @include('docs.sub.partial.side_bar.index')


            <!-- main page content start -->

            @include('docs.sub.partial.header.rightMenuToggle')

            @include('docs.sub.partial.header.subTop')

            @include('flash::message')

            @if (request()->input('q'))
                @include('docs.sub.main.search')
            @else
                @include('docs.sub.main.content')
            @endif

            <!-- main page content end -->


            <!-- main page footer -->
            @include('docs.sub.partial.footer.tailNav')

            @include('docs.sub.partial.footer.disqusApp')

            @include('docs.sub.partial.footer.prevNext')

            @include('docs.sub.partial.footer.backToTop')

        </main>

    </div>


@endsection

@section('script')

    <script id="dsq-count-scr" src="//austin-1.disqus.com/count.js" async></script>

    <script>
        $(document).ready(function () {
            if (typeof(Storage) !== "undefined") {
                if(localStorage.sidebar == "hidden") {
                    menuToggle(true);
                }else {
                    $(".sidebar").show();
                    $(".toc-header").show();
                }
            }else {
                $(".sidebar").show();
                $(".toc-header").show();
            }
            $(".toc").css("display", "block");
            if (typeof(Storage) !== "undefined") {
                $(".sidebar").scrollTop(localStorage.sp);
            }
            $(".sidebar").css("overflow-y", "auto");
            $(".menu-toggle").on("click", function() {
                menuToggle();

                if (typeof(Storage) !== "undefined") {
                    if($(".sidebar").is(":hidden")) {
                        localStorage.sidebar = "hidden";
                    }else {
                        localStorage.sidebar = "show";
                    }
                }
            });
            $("#load_content").show();
        });

        function menuToggle(no_sidebar) {
            if(!no_sidebar) {
                $(".sidebar").toggle();
                $(".toc-header").toggle();
            }
            $("#load_content").toggleClass("offset-md-3");
            $("#load_content").toggleClass("col-md-9");
            $("#load_content").toggleClass("col-md-12");
            $("#load_content").toggleClass("mainSide-padding");
            $(".prev_next_indicator").toggle();
            $(".menu-group").toggle();
        };
    </script>
@endsection
