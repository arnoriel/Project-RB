@if(Auth::user()->hasRole('admin'))
     <script>window.location = "/administrator/";</script>
@elseif(Auth::user()->hasRole('member'))
     <script>window.location = "/member/";</script>
@endif