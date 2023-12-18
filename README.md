# carrent

this is an application for car rental companies created by the following frameworks [Laravel](https://laravel.com/docs/10.x/releases) and [Vue.js](https://vuejs.org/guide/introduction.html) for backend and frontend respectively.  

##  Prerequisites : 
 * install wamp or xampp
 * install composer 
 * install npm


## Getting Started :
Once you get your wamp/xampp server started, open your terminal or text editor's terminal and run the following commands :   

#### Tailwind configuration 
 <pre><code>npm install -D tailwindcss postcss autoprefixer</code></pre>
 <pre><code>npx tailwindcss init -p</code></pre>
 ## Flatpickr vuejs liberary configuration
 <pre><code>npm i vue-flatpickr-component </code></pre>
 
#### Spatie media library configuration 
 <pre><code>composer require spatie/laravel-medialibrary:*</code></pre>
 <sup>__PS: take note that this project is using the most recent spatie version v-10.__</sub>

#### s3 Storage configuration 
 <pre><code>composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies</code></pre>

#### Socialite configuration 
 <pre><code>composer require laravel/socialite</code></pre>
 
#### Commands needed to run the project  
 <pre><code>npm run dev</code></pre>
 <pre><code>php artisan serve</code></pre>
 <pre><code>php artisan db:seed</code></pre>
 
 
