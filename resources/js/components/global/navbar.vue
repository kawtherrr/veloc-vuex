<template>
  <div class="py-3 px-3  md:flex justify-between items-center">
    <div class="flex items-center">
      <h1 class="logo text-4xl text-fdc100">Ve<span class="text-black">LoC</span></h1>
    </div>

    <ul class="mr-10 md:flex md:items-center md:px-0 px-3 md:pb-0 pb-10">
      <li class="md:mx-4 md:my-0 my-6 font-medium" v-for="link in Links">
        <a :href="link.link" class="text-xl hover:text-white ease-out duration-300">{{ link.name }}</a>
      </li>

      <button class="lang-menu bg-white text-fdc100 border-2 border-fdc100 ml-8 mr-16 relative duration-300 font-sm rounded py-2 px-4">
                <div class="selected-lang mr-3">
                    English
                    <img src="/images/world.svg" class="absolute top-2 w-6 h-6 right-0 mr-2">
                </div>
                <ul class="mt-2.5 -ml-8">
                    <li>
                        <a href="" class="en">English</a>
                    </li>
                    <li>
                        <a href="" class="fr">French</a>
                    </li>
                    <li>
                        <a href="" class="ar">Arabic</a>
                    </li>
                </ul>
                
            </button>

      <button class="bg-white text-fdc100 border-2 border-fdc100 mx-3 duration-300 font-sm rounded py-2 px-4"> Log in</button>
      <a href="/signup" class="bg-fdc100 text-white border-2 border-fdc100 mr-5 duration-300 font-sm rounded py-2 px-4"> Rent my car</a>
    </ul>
  </div>
</template>
<script>
export default {
  setup() {
    let Links = [
      { name: "Home", link: "home" },
      { name: "How it works", link: "#" },
      { name: "About us", link: "#" },
      { name: "FAQ", link: "#" },
    ]
    return { Links }
  }
}

</script>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;700;900&family=Zen+Dots&display=swap');
ul {
  font-family: 'Mulish', sans-serif;
}

.logo {
  font-family: 'Zen Dots', sans-serif;
}

.lang-menu ul {
    display: none;
    background-color: #fff;
    position: absolute;
    width: 140px;
    border-radius: 10px;
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
    
}

.lang-menu ul li a {
    text-decoration: none;
    padding: 8px 10px;
    display: block;
    color:black;
}

.lang-menu ul li:hover {
    background-color: #D9D9D9;
    margin-right: 7px;
    margin-left: 7px;
    border-radius: 5px;
}

.lang-menu:hover ul {
    display: block;
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>


