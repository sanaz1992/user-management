<div class="baner-pag mt-50px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{ asset('/template/images/background/in-pag.jpg') }}" alt="" class="w-100" />
            </div>
        </div>
    </div>

    <!-- ende-baner-->
    <!-- start-box-h1 -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-pag-in">
                    <nav aria-label="breadcrumb" class="breadcom">
                        <ol class="breadcrumbs-custom-path justify-content-center">
                            @foreach ($breadcrumbs as $breadcrumb)
                                @isset($breadcrumb['url'])
                                    <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a></li>
                                @else
                                    <li class="active">
                                        <h6 class="bredcum">{{ $breadcrumb['title'] }}</h6>
                                    </li>
                                @endisset
                            @endforeach

                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>
