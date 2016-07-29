<html>
  <head>
    <title>Event.ge</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/style.min.css') }}" >
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="{{ URL::asset('public/js/vue.js') }}"></script>
    <meta charset="utf-8">
  </head>

  <body>

    <script type="x/template" id="modal-template">
      <div class="modal-mask" v-show="show" transition="modal">
        <div class="modal-wrapper">
          <div class="modal-container userModal">
            <h1>ჩემი ანგარიში
            <button class="button close" @click="show = false"></button>
            </h1>
            <div class="avatar"></div>
            <ul>
              <li>Levan Gongadze</li>
              <li><a href="">ჩემი ანგარიში</a></li>
              <li><a href="">გასვლა</a></li>
            </ul>
          </div>
        </div>
      </div>
    </script>

    <header>
      <nav class="headerNavigation">
        <li><a href="#">ივენთები</a>
          <ul class="drop">
            <li><a href="{{ URL::to('Admin/Events/create') }}">ივენთის დამატება</a></li>
            <li><a href="{{ URL::to('Admin/Events') }}">ივენთების მართვა</a></li>
          </ul>
        </li>
        <li><a href="#">სპიკერები</a>
          <ul class="drop">
            <li><a href="{{ URL::to('Admin/Speakers/create') }}">სპიკერის დამატება</a></li>
            <li><a href="{{ URL::to('Admin/Speakers') }}">სპიკერების მართვა</a></li>
          </ul>
        </li>
        <li><a href="#">სიახლეები</a>
          <ul class="drop">
            <li><a href="#">სიახლის დამატება</a></li>
            <li><a href="#">სიახლეების მართვა</a></li>
          </ul>
        </li>
        <li><a href="#">სტატისტიკა</a></li>
        <li><a href="{{ URL::to('Admin/Forms') }}">ფორმები</a></li>
      </nav>
    </header>

    <!-- <div class="content">
      <div class="statistics">
        <div class="block">
          <h1><p>ივენთი</p>122</h1>
        </div>
        <div class="block">
          <h1><p>სპიკერი</p>21</h1>
        </div>
        <div class="block">
          <h1><p>სიახლე</p>211</h1>
        </div>
        <div class="block">
          <h1><p>აუდიტორია</p>445</h1>
        </div>
      </div>
    </div> -->

    <div class="maxWidth wrapper">
      @yield('content')
    </div>
    <script src="{{ URL::asset('public/js/main.js') }}"></script>
  </body>
</html>
