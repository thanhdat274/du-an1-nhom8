$(document).ready(function(){
  $(".img_item img").each(function(){
    $(this).click(function () {
      let SrcImg = $(this).attr('src')
      $(".im_product img").attr('src',SrcImg)
    })
  });
});

function descriptionProduct() {
  const descriptions = document.querySelectorAll('.description_item')
  const ContentDescription = document.querySelectorAll('.content__item')
  const descriptionLine = document.querySelector('.description_item.activeDescriptions')
  const lines = document.querySelector('.line')

  lines.style.left = descriptionLine.offsetLeft+'px'
  lines.style.width = descriptionLine.offsetWidth+'px'

  descriptions.forEach((e,i) => {
    const elementContent = ContentDescription[i]

    e.onclick = function () {
      const descriptionsActive = document.querySelector('.content__item.activeDescriptions')
      const headerItem =  document.querySelector('.description_item.activeDescriptions')

      elementContent.classList.add('activeDescriptions')
      e.classList.add('activeDescriptions')
      
      lines.style.left = this.offsetLeft+'px'
      lines.style.width = this.offsetWidth+'px'

      descriptionsActive.classList.remove('activeDescriptions')
      headerItem.classList.remove('activeDescriptions')
    }
  });
}
descriptionProduct();