<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body {!! body_class() !!} data-barba="wrapper">
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="content-wrap transition-fade" id="swup" role="document" data-barba="container" data-barba-namespace="{{ $post->post_name }}">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
