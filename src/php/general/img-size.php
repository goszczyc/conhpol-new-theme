<?php

/*************** IMAGE SIZES ***************/
if (function_exists('add_image_size')) {
  add_image_size('standard', 1280, 720, false);
  add_image_size('standard_vertical', 720, 1280, false);
  add_image_size('about', 630, 945, false);
  add_image_size('img_small', 409, 273);
  add_image_size('gallery_img', 548, 761, true);
  add_image_size('banner', 1738, 905, true);
}
