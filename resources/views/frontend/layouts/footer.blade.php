
  <footer class="app-footer">
  <div class="container justify-content-center">
    <div class="row"style=" display: flex;
  align-items: center;">
    <div class="col-12" style=" display: flex;
  align-items: center;
  justify-content: center;">
  @foreach ($socials as $social)

         @if($social->name=='instagram'&&$social->status==1)
        <a href="{{$social->link}}"target="_blank" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
         @endif
         @if($social->name=='twitter'&&$social->status==1)
        <a href="{{$social->link}}" target="_blank" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
          @endif
                   @if($social->name=='whatsapp'&&$social->status==1)
        <a href="{{$social->link}}" target="_blank" class="btn-social btn-email"><i class="fa fa-whatsapp"></i></a>
          @endif
          @if($social->name=='snapchat'&&$social->status==1)
        <a href="{{$social->link}}" target="_blank" class="btn-social btn-email"style="background-color:yellow;"><i class="fa fa-snapchat-ghost"></i></a>
          @endif
             @if($social->name=='youtube'&&$social->status==1)
        <a href="{{$social->link}}" target="_blank" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
        @endif
             @if($social->name=='email'&&$social->status==1)
        <a href="{{$social->link}}" target="_blank" class="btn-social btn-email"><i class="fa fa-envelope"></i></a>
  @endif
  @endforeach
    </div>


</div>
</div>
        <div class="d-block w-100 text-center">
          &copy;
             جميع الحقوق محفوظه لدى
        
              
        Tiny Coders    2019
    
             </div>

</footer>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ddc78ec43be710e1d1f1329/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->