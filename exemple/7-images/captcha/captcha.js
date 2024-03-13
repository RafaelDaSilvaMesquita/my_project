//default icon colors
const bgColor = 'transparent'
const textColor = '#FF4500'

//selected icon colors
const bgColorFocus = 'none'
const textColorFocus = '#3CB371'

$(".interaction-btn").each(function(){
  $(this).click(clickedBtn);
});

function clickedBtn ()
{
  resetAllBtns()

  //change clicked btn to selected colors
  $(this).css("background-color", bgColorFocus);
  $(this).css("color", textColorFocus);

  // select svg and cancel any current animation
  var svg = $(this).find("svg");
  TweenLite.killTweensOf(svg);
  TweenLite.to(svg,.3,{stroke:textColorFocus, fill:textColorFocus, scale:1.1});

  // get the button id
  var id = $(this).data("animation");
  // and animate accordingly
  animations[id](svg)
}

const resetAllBtns = () => {
  //reset btns colors
  const btns = $(".interaction-btn");
  btns.css("background-color", bgColor);
  btns.css("color", textColor);

  //resets svgs colors
  const svgs = btns.find("svg");
  TweenLite.to(svgs,.3,{stroke:textColor, fill:textColor, scale:1});
}

const animations = {
  'captcha': (svg) => {
    TweenLite.fromTo(svg.find("#exe1"),.5,{scale:0, transformOrigin:"50% 50%"},{delay:.25, scale:1, ease:Elastic.easeOut});
    TweenLite.fromTo(svg.find("#exe2"),.5,{scale:0, transformOrigin:"50% 50%"},{delay:.5, scale:1, ease:Elastic.easeOut});
  }
}
