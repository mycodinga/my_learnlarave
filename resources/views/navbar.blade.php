<style>
    * {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

html {
  width: 100%;
}

nav {
  background: rgb(185, 186, 188);
  height: 80px;
  width: 100%;
}

label.logo {
  color: yellow;
  font-size: clamp(3.5rem, 2.5vw, 2rem);
  font-weight: 500;
  line-height: 80px;
  padding: 0 50px;
  text-transform: uppercase;
  font-family: sans-serif;
  font-weight: 600;
} 

nav ul {
  gap: 30px;
  float: right;
  margin-right: 20px;  
}

nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}

nav ul li a {
  color: white;
  font-size: 17px;
  padding: 10px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}

a.active, a:hover {
  background: rgb(49, 68, 160);
  transition: 0.5s;
}

.checkbtn {
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}

section {
    min-height: 100vh;
    width: 100%;
    background: url(https://images.unsplash.com/photo-1682687982502-1529b3b33f85?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; 
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

quote {
  background: rgba(47, 49, 65, 0.5);
  color: white;
  padding: 70px 50px;
  text-align: center;
  border-radius: 20px;
  box-shadow: 10px 16px 42px -23px rgba(0,0,0,0.44);
}

h1 {
  font-size: clamp(1.5rem, 2.5vw, 3rem);
  margin-bottom: 1rem;
}

p {
  font-size: clamp(0.7rem, 2.5vw, 1rem);
}

@media screen and (max-width: 950px) {
  
  label.logo {
    padding-left: 40px;
  }
  
  nav ul li a {
    font-size: 16px;
  }
}

@media screen and (max-width: 850px) {
  
  .checkbtn {
    display: block;
  }
  
  ul {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    right: calc(-100% - 20px);
    text-align: center;
    transition: all 0.5s;
  }
  
  nav ul li {
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  
  nav ul li a {
    font-size: 20px;
  }
  
  a:hover, a.active {
    background: none;
    color: #0082e6;
  }
  
  #check:checked ~ ul {
    right: -20px;
  }
}


</style>
<body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
      <label class="logo"><span style="color: whitesmoke">P</span>PLG</label>

      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
    
    <section>
      {{-- <quote> --}}
       @yield('tulisan')
      {{-- </quote> --}}
    </section>
    
  </body>