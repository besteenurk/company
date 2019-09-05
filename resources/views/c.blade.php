<h1>Companies with surveys questions and options</h1>

 @foreach($companies as $companies)
     <div >
         <h3>
             Company ID : {{$companies->id}}  -
             Company name : {{$companies->name}}  -
             Survey name : {{$companies->s}}  -
             Question text : {{$companies->t}}  -
             Option text : {{$companies->o}}</h3>
     </div>
 @endforeach



