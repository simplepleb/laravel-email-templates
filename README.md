# laravel-mails
Laravel (Blade) Email Templates For membership and ecommerce sites. 

Fully integrated with Laravel: Mailer, Language, Config and uses the blade template format for Laravel. Set content options from language system or config settings. 

Easy to add to your current application, no need for complicated integration steps. Three Simple Integration Steps

## Premium Version Available At XSCode

[![Foo](https://xscode.com/assets/promo-banner.svg)](https://xscode.com/simplepleb/laravel-email-templates)

(click the banner above for premium version)
## Screenshots
- [Welcome Email](#welcomeEmail)
- [Verification Email](#verifyEmail)
- [Forgot Password](#forgotPass)
- [Thanks For Payment](#thanksPayment)

## To Do
- [x] Welcome Message Template
- [x] Verify Email Template
- [x] Forgot Password Template
- [ ] Order Placed Template
- [ ] Order Shipped Template
- [ ] Invoice Template
- [x] Payment Thank You Template
- [ ] Feedback Request Template
- [ ] Reminder Template

## How to Install

Install this library on your application

```sh
composer require --dev simplepleb/laravel-email-templates
```

Automatically copy files and folders to the same structure within you Laravel application.

```php
php artisan vendor:publish --provider=Pleb\\EmailTemplatesServiceProvider
```

If you'd like to copy only parts of the files, you can use tags.

```php
php artisan vendor:publish --tag=pleb-email-templates-config    // to copy config files
php artisan vendor:publish --tag=pleb-email-templates-views     // to copy views files
php artisan vendor:publish --tag=pleb-email-templates-lang      // to copy lang files
php artisan vendor:publish --tag=pleb-email-templates-img       // to copy img files
php artisan vendor:publish --tag=pleb-email-templates-app       // to copy app files
```

### Manually

Alternatively, you can copy the files yourself to your Laravel application.

```bash
    /config/pleb.php 
    /resources/views/email/*
    /resources/lang/en/pleb.php
    /public/assets/img/email/*
    /app/Mail/*
```

## How to Use

* Edit the values in ``` config/pleb.php ``` and ``` /resources/lang/en/pleb.php ``` 

    **Note:** You only change the right-side values not the left-side variables

* Make sure your ```/config/mail.php``` file has been updated to set the global from address etc.
```php
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],
```

## Sending Welcome Message
From your controller simply call the mailable as you normally would. You can also send some optional
variables as an array.



```php
    use App\User;
    use App\Mail\WelcomeMember;

    $options = array(
        'unsubscribe_url'   => 'http://mysite.com/unsub',
        'play_url'          => 'http://google-play.com/myapp',
        'ios_url'           => 'http://apple-store.com/myapp',
        'sendfriend_url'    => 'http://mysite.com/send_friend',
        'webview_url'       => 'http://mysite.com/webview_url',
    );


    $user = User:find(1);
    Mail::to($user)->send(new WelcomeMember($user, $options));
```

## Previewing these emails
If you would like to preview the emails before using them, copy the contents of the 
```/routes/web.php``` to your version. Remember to remove these routes before launching your application.

Then open these URLS to view the template

* ```/your.com/pleb/welcome_member```
* ```/your.com/pleb/verify_email```
* ```/your.com/pleb/forgot_password```
* ```/your.com/pleb/thanks_payment```

Example route from ``` routes/web.php ```

```php
    Route::get('pleb/welcome_member', function () {
    
        $member = App\User::find(1);
        return new App\Mail\WelcomeMember($member);
    });

```

## Screen Shots

<a name="welcomeEmail"></a>
### Welcome Email

Full Size 

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Welcome-Message.png" width="400">

Mobile View

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Welcome-Message-mobile.png" width="200">

<a name="verifyEmail"></a>
### Verification Email

Full Size

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Verify-Your-Email.png" width="400">

Mobile View

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Verify-Your-Email-mobile.png" width="200">


<a name="forgotPass"></a>
### Forgot Password Email

Full Size

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Forgot-Password.png" width="400">

Mobile View

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Forgot-Password-mobile.png" width="200">


<a name="thanksPayment"></a>
### Thanks For Payment Email

Full Size

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Thanks-for-your-payment.png" width="400">

Mobile View

<img src="https://github.com/simplepleb/laravel-email-templates/raw/main/pleb-Thanks-for-your-payment-mobile.png" width="200">

