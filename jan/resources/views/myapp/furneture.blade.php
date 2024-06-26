<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/asset/css/project.css')}}">

    <style>
      
/* Color Variables */
:root {
  --white: #fff;
  --black: #222;
  --green: #6cbe02;
  --grey1: #f0f0f0;
  --grey2: #e9d7d3;
}

/* Basic Reset */
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
}
body {
    font-family: "Roboto", sans-serif;
    font-size: 1.6rem;
    background-color: var(--white);
    color: var(--black);
    font-weight: 400;
    font-style: normal;
  }
  
  a {
    text-decoration: none;
    color: var(--black);
  }
  li {
    list-style: none;
  }
  
  img {
    width: 100%;
  }
  .container {
    max-width: 114rem;
    margin: 0 auto;
    padding: 0 3rem;
  }
  
  .d-flex {
    display: flex;
    align-items: center;
  }  
/* Rent Properties */
.section {
    padding: 10rem 0;
  }
  
  .section.rent {
    background-color: #f0f4f7;
  }
  
  
  .rent-center {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(25rem, 1fr));
    gap: 4rem 2rem;
  }
  
  .title {
    text-align: center;
    margin-bottom: 5rem;
    padding: 1rem;
  }
  
  .title h1 {
    font-weight: 100;
    font-size: 6rem;
    margin-bottom: 1rem;
  }
  
  .rent .box {
    transition: all 300ms ease-in-out;
    background-color: white;
  }
  
  .rent .box:hover {
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
  }
  
  .rent .box .top {
    padding: 1rem;
    position: relative;
    height: 20rem;
    transition: all 300ms ease-in-out;
  }
  
  .rent .box:hover .top {
    cursor: pointer;
  }
  
  .rent .box .top img {
    height: 100%;
    object-fit: cover;
  }
  
  .rent .box .overlay {
    position: absolute;
    top: 0;
    left: 0;
    /* padding: 1rem; */
    background-color: white;
    height: 20rem;
    width: 100%;
  }
  
  .rent .box .overlay::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.2);
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: all 300ms ease-in-out;
  }
  
  .rent .box .top:hover .overlay::after {
    opacity: 1;
    visibility: visible;
  }
  
  .rent .box .pos {
    position: absolute;
    top: 2rem;
    left: 2rem;
  }
  
  .rent .box .pos span {
    display: inline-block;
    font-size: 1.3rem;
    color: white;
    margin-right: 0.5rem;
    padding: 0.3rem;
    border-radius: 0.3rem;
  }
  
  .rent .box .pos span:first-child {
    background-color: #43c370;
  }
  
  .rent .box .pos span:last-child {
    background-color: #e0203b;
  }
  
  .rent .box .bottom {
    padding: 1.5rem;
  }
  
  .rent .box .bottom p {
    font-size: 2rem;
    font-weight: 500;
    color: #555;
    cursor: pointer;
    transition: all 300ms ease-in-out;
  }
  
  .rent .box .bottom div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
    color: #555;
  }
  
  .rent .box .bottom div span {
    font-size: 1.8rem;
  }
  
  .rent .box:hover .bottom p {
    color: #006eff;
  }
  
  .rent .box .bottom div i {
    font-size: 2.5rem;
  }
  
  @media (max-width: 768px) {
    .title h1 {
      font-size: 4rem;
    }
  }
  
  @media (max-width: 567px) {
    .title h1 {
      font-size: 3rem;
    }
  }
  
    </style>
</head>
<body>

@include("myapp.layouts.header")

<section class="section rent">
    <div class="title">
      <h1>Properties for kitichen</h1>
      <p>
        Search over 2000 properties to kitichen from the top agents in the house
      </p>
    </div>

    <div class="rent-center container">
      <a href="../product/product.html">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f1.jpg" alt="" />
            </div>
           
          </div>
          <div class="bottom">
            <p>room can be decorate</p>

            <div>
              <span>$100</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="../product/product.html">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f2.jpg" alt="" />
            </div>
           
          </div>
          <div class="bottom">
            <p>many dining room include</p>
            <div>
              <span>$200</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="../product/product.html">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f3.jpg" alt="" />
            </div>
            
          </div>
          <div class="bottom">
            <p>room can be decorate</p>
            <div>
              <span>$300</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f4.jpg" alt="" />
            </div>
           
          </div>
          <div class="bottom">
            <p>comman folrring option</p>
            <div>
              <span>$400</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f5.jpg" alt="" />
            </div>
            
          </div>
          <div class="bottom">
            <p>placing a rug under the </p>
            <div>
              <span>$500</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f6.jpg" alt="" />
            </div>
            
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f7.jpg" alt="" />
            </div>
            
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
      <a href="">
        <div class="box">
          <div class="top">
            <div class="overlay">
              <img src="./images/f8.jpg" alt="" />
            </div>
            
          </div>
          <div class="bottom">
            <p>Luxury villa in las vegas</p>
            <div>
              <span>$700</span>
              <span><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </section>
  @include("myapp.layouts.footer")
</body>
</html>