<nav>
    <div class="nav-wrapper">
        <div class="col s12">
            @if (Request::segment(1)!="")

                <a href="{{URL::to('/'.Request::segment(1))}}" class="breadcrumb">{{ucfirst(Request::segment(1))}}</a>
            @endif

            @if (Request::segment(2)!="")

                <a href="{{URL::to('/'.Request::segment(1).'/'.Request::segment(2))}}"
                   class="breadcrumb">{{ucfirst(Request::segment(2))}}</a>
            @endif


            @if (Request::segment(3)!="")
                <a href="{{Request::url()}}"
                   class="breadcrumb">{{ucfirst(Request::segment(3))}}</a>
            @endif

            
        </div>
    </div>
</nav>