'use strict';

{
  const dts = document.querySelectorAll('dt');
  const tabMenuItems = document.querySelectorAll('.tabmenu li a');
  const contents = document.querySelectorAll('.content');

  dts.forEach(dt => {
    dt.addEventListener('click', () => {
      dt.parentNode.classList.toggle('appear');

      dts.forEach(el => {
        if (dt !== el) {
          el.parentNode.classList.remove('appear');
        }
      });

      
      tabMenuItems.forEach(clickedItem => {
        clickedItem.addEventListener('click', e => {
          e.preventDefault();
    
          tabMenuItems.forEach(item => {
            item.classList.remove('active');
          });
          clickedItem.classList.add('active');
    
          contents.forEach(content => {
            content.classList.remove('active');
          });
          document.getElementById(clickedItem.dataset.id).classList.add('active');
        });
      });
    });
  });

}