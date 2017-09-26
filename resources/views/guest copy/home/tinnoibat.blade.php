    <div class="col-md-8">
      <div class="portlet" style="padding-bottom: 15px">
        <div class="portlet-content">
          <div class="row">
            <div class="carousel slide" id="carousel-example-captions" data-ride="carousel">

                @php
                  $tinactive = $tinnoibat->shift();
                @endphp

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-captions" data-slide-to="{{ $tinactive->id }}" class="active"></li>

                    @foreach ($tinnoibat as $tnb)

                    <li data-target="#carousel-example-captions" data-slide-to="{{ $tnb->id}}" class=""></li>

                    @endforeach
                    

                </ol>
                <div class="carousel-inner" role="listbox">

                    <div class="item active">
                      <a href="chi-tiet/{{ $tinactive->slug }}">
                        <img src="{{ $tinactive->avatar }} " alt=" {{ $tinactive->name }} " width="100%">
                      </a>
                    </div>

                    @foreach ($tinnoibat as $tnb)

                    <div class="item"> 
                      <a href="chi-tiet/{{ $tnb->slug }}">
                        <img src="{{ $tnb->avatar }}" alt="{{ $tnb->name }}" width="100%">
                      </a>
                    </div>

                    @endforeach
                    
                </div>
                {{-- <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> --}}
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="portlet" style="padding-bottom: 15px">
        <div class="portlet-content">
          <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
            <ul class="nav nav-tabs" id="myTabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Tin Mới</a>
                </li>
                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Tin Nổi bật</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade in active" role="tabpanel" id="home" aria-labelledby="home-tab">
                  <ul>
                      @foreach ($tinmoi as $tm)
                      <li>
                          <div class="hot-news-block">
                            <a href="chi-tiet/{{ $tm->slug }}" class="news-title">
                              {{ $tm->name }}
                            </a>
                          </div>
                      </li>
                      @endforeach
                      
                  </ul>
                </div>

                <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                  <ul>
                      @foreach ($tinnoibat as $tnb)

                      <li>
                          <div class="hot-news-block">
                            <a href="chi-tiet/{{ $tnb->slug }}" class="news-title">
                              {{ $tnb->name }}
                            </a>
                          </div>
                      </li>

                      @endforeach
                    
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
