@if(Auth::user()->hasRole('member'))
     <script>window.location = "/member/resep";</script>
@elseif(Auth::user()->hasRole('admin'))
     <script>window.location = "/administrator/";</script>
@endif