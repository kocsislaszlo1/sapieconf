<section id="schedule" class="section-with-bg">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div>
 
    <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
      necessitatibus voluptatem quis labore perspiciatis quia.</h3>

     <div class="tab-content row justify-content-center">
   
        <div role="tabpanel" class="col-lg-10" id="1">
      @foreach ($szekciok as $szekcio) 
     
     
        <p class="szekciocim">{{$szekcio->szekcionev}},start of section:{{$szekcio->idopont}}</p>
        @if($szekcio->online==1)<p class="link">
        <a href="{{$szekcio->link}}">Link:{{$szekcio->link}}</a>
        </p>
        @endif
        @foreach($moderatorok as $mod)
        @if($mod->szekciok_id==$szekcio->id)
        <p class="mod">moderator:{{$mod->name}}</p>
        @endif
        @endforeach
        @foreach ($szekcio->eloadok as $eloado) 
     
          <div class="row schedule-item">                
              <div class="col-md-1">Start<time>{{$eloado->pivot->kezdete}}</time></div>
               <div class="col-md-1">End<time>{{$eloado->pivot->vege}}</time></div>                                      
              <div class="col-md-10">
                <h4>{{ $eloado->eloadascim }}<br><span>{{$eloado->fokozat}} {{$eloado->nev }}</span></h4>
               <h4>{{$eloado->intezmeny}}</h4>
              
              </div>
            </div>
          @endforeach
        @endforeach 
         
        </div>
     
    </div> 
  </div>
</section>
