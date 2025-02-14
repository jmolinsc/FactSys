<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
      /*   //
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {
            // Add some items to the menu...
            $event->menu->add('Comercial');
            $event->menu->add([
                'text'        => 'Ventas',
                'url'         => 'admin/pages',
                'icon'        => 'fas fa-fw fa-shopping-cart',
                'submenu' => [
                    [
                        'text' => 'Nueva venta',
                        'url'  => '/venta',
                    ],
                    [
                        'text' => 'Listar ventas',
                        'url'  => '/venta/show',
                    ],
                ],
            ]);
        }); */
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
