jQuery(document).ready(function($){
   /* サブウインドウ表示 */
   $(".opensub").click(function(){
      window.open(this.href,"WindowName","width=520,height=520,resizable=yes,scrollbars=yes");
      return false;
   });
});
