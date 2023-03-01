
## A Laravel costomed Notification service
### This service extends an interface which gets and store all notification in your app to an array and also find and delte a user by its index,  

In your project


```bash
mkdir app/Repository/NotificationRepository 
```

Copy the notication interface and class
```bash
cp NotificationInterface & NotificationRepository to app/Repository/NotificationRepository 
```
you will need to create a notification method on the model you are notifying
```bash
namespace App\Models

class Xmodel {
    public function notification(){
        //
    }
}
```
Then use the register method in the appserviceprovider and bind the NOtification interface and the notification class 

```bash
php artisan make:notification example_class_to_notify 
```
```bash
php artisan migrate
```

# I am open for projects



- **THank you ** <br>


