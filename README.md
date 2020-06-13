<p align="center"><img src="https://laravelarticle.com/filemanager/uploads/laravel-livewire.png" width="400"></p>

## About This App
This app serves to show how we can achieve the same functionality with Vue in Laravel Livewire. I have been working with Vue since 2015, and Livewire since March 2020. 

The Vue portion of this app took roughly an hour or so, Livewire took about 5 minutes. I was able to copy the html markup from the Vue form over, but that didn't save much time since I copied it originally from TailwindUI.

The reason it takes so much less time is because instead of having to `npm install &&  nom run ...`, create an API endpoint and a controller to consume data, not to mention having my browser console open to check for errors, all of this logic is contained in a single class and really with only a couple lines of code. Additionally, with Livewire, I was able to use anything that Blade has to offer directly in my markup.

## Test it out
 - Clone this repo locally (no database setup is required)
 - run `composer require`
 - Test the livewire portion out by hitting the `/livewire` route.
 - Submit the form without without any data to see the validation errors, then again with the form filled out to see the data come back from the Class.
 - To see Vue working run `npm install && npm run dev/prod` and hit the `/vue` endpoint and follow the same steps
 
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
