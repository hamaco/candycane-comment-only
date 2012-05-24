<hr />
<a id='candycane_comment_only_display_button' href='javascript:void(0)'>display all history</a>

<script type="text/javascript">
  (function() {
    var jornals = $$('.journal');
    jornals.each(function(jornal) {
      if (jornal.select('.wiki').size() === 0) {
        jornal.hide();
      } else {
        jornal.select('ul').each(Element.hide);
      }
    });

    function CandycaneCommentOnlyShowAll() {
      jornals.each(function(jornal) {
        if (jornal.select('.wiki').size() === 0) {
          jornal.show();
        } else {
          jornal.select('ul').each(Element.show);
        }
      });
      this.hide();
    }
    $('candycane_comment_only_display_button').observe('click', CandycaneCommentOnlyShowAll);
  })();
</script>
