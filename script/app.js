let hero_img = document.querySelector('.header__wrap__banner');

let hero_img_item = hero_img.querySelectorAll('.banner_primary-img');

let hero_img_index = 0 ;

let hero_img_play = true;

showImg = (index) => {
  hero_img.querySelector('.banner_primary-img.active').classList.remove('active')
  hero_img_item[index].classList.add('active')
}

nextImg = () =>{
  hero_img_index = hero_img_index + 1 === hero_img_item.length ? 0 : hero_img_index + 1
  showImg(hero_img_index);
}

setTimeout(() => hero_img_item[0].classList.add('active'),200);

setInterval(()=> {
  if(!hero_img_play) return
  nextImg()
},5000);



