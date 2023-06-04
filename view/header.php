<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BEESTORE</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="view/bootstrap-5.0.2-dist/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="view/css/style.css" />
    <link rel="stylesheet" href="headerbase.css">

  </head>
  <body>
<!-- header -->
<div class="container-fluid">
     
  <div class="header">
      <div class="row row__header"  id="header">
          <div class="row row__title">
            <div class="col-3">
              <a href="index.php" style="text-decoration: none;" class="href1">
                  <h1 class="header__title">BEESTORE</h1>
              </a>
            </div>
            <div class="col-9 col__icon">
              <div class="icon">
                <!-- login -->
                <a href="index.php?act=dangky" style="text-decoration:none ;">
                  <svg class="logo__card" class="svg-account" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                    <g><g id="account-circle">
                      <path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,76.5
                              c43.35,0,76.5,33.15,76.5,76.5s-33.15,76.5-76.5,76.5c-43.35,0-76.5-33.15-76.5-76.5S211.65,76.5,255,76.5z M255,438.6
                              c-63.75,0-119.85-33.149-153-81.6c0-51,102-79.05,153-79.05S408,306,408,357C374.85,405.45,318.75,438.6,255,438.6z"></path>
                      </g></g>
                  </svg>
                </a>
                <!-- giohang -->
                <svg class="logo__card" class="svg-search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                <g>
                <path d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"></path>
                </g>
                </svg>
                <!-- search -->      
                <svg class="svg-cart logo__card" xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -13 456.75885 456" width="25px">
                  <path d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                  <path d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0"></path>
                  <path d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0"></path>
                </svg>
                <!-- menulist -->
                <span class="header__icon">
                  <svg class="header__iconmenu" id="logo_menu"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/>               
                  </svg>
                  <div class="menu__list">
                    <div class="menu__list--header">
                      <span class="menu__list--title">MENU</span>                    </div>
                    <a href="index.php" style="text-decoration: none;">
                      <p class="menu__list--content">Trang chủ</p>
                    </a>
                    <a href="index.php?act=sanpham" style="text-decoration: none;">
                     <P class="menu__list--content">Sản phẩm</P>
                    </a>
                    <a href="index.php?act=lienhe" style="text-decoration: none;">
                      <P class="menu__list--content">Liên hệ</P>
                    </a>
                  </div>
              </span>

              </div>   
            </div>
          </div>

          <div class="row row__list">
              <div class="col-4"></div>
              <div class="col-4 ">
                  <ol class="row header__list">
                      <a class="col-md-4 href" href="index.php" style="text-decoration: none;">
                          <li class="text-center header__list--item">TRANG CHỦ</li>
                      </a>
                      <a class="col-md-4 href" href="index.php?act=sanpham" style="text-decoration: none; ">
                          <li class="text-center header__list--item">SẢN PHẨM</li>
                      </a>
                      <a class="col-md-4 href" href="index.php?act=lienhe" style="text-decoration: none;">
                          <li class="text-center header__list--item">LIÊN HỆ</li>
                      </a>
                  </ol>
              </div>
              <div class="col-4"></div>
          </div>
      </div>
  </div>           
</div>


