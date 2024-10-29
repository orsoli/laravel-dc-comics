# Project Template in Laravel ^10.0 + Bootstrap 5.3.3 + Sassi. 
<p align="center">
<a href="https://getbootstrap.com" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:400/1*onZhQJU7A3ab6V1sHfMRkQ.jpeg" height="150"></a>
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="150"></a>
<a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="150"></a>
</p>

- npm i
- Create infrastructure necessary in our project.

## Install SASS library
- Install Sass `npm i -D sass`.
- Modify all folder and files from `css` to `scss`.
- Modify the path in laravel plugin in vite.config.js's file from `resources/css/app.css` to `resources/scss/app.scss`.
- Add an Alias in file vite.config.js:
``` 
resolve: {
        alias: {
            '~resources' : "/resources/"
        }
    }  
```
- Import `app.scss` in `app.js`. `import "~resources/scss/app.scss"` in file `resources/js/app.js`
- Add the `app.js` file in each layouts in my project using @vite. `@vite("resources/js/app.js");`
- Add the `package-lock-json` in `.gitignore` file.

## Install Bootstrap 5.3.3 library
- Install using npm the necessary bootstrap packages: `npm i bootstrap @popperjs/core`.
- On top of vite.config.js add a path: `import path from "path";`.
- Add an Allias in vite.config.js inside Allias object: `'~bootstrap' : path.resolve(__dirname, "node_modules/bootstrap")`
- Add bootstrap library in file app.scss: `@use "~bootstrap/scss/bootstrap" as * ;`.
- Import bootstrap library in file app.js: `import * as bootstrap from "bootstrap";`.



# Make and Use as Template a repository
- Open the project repository in github.
- Go to `Settings` (top-right to screen).
- In `General` check `Template repository`.
- Create new repository.
- Open this new project.
- Copy/Paste the `.env.example` file in scaffholdings, and rename `.env`.
- In terminals execute `npm i` and `composer i`.
- Execute `php artisan key:generate` generating new unic key.
- Run the project front and server: `php artisan serve` and `npm run dev`.


