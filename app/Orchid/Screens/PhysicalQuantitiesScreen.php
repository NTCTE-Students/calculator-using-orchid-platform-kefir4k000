<?php
namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class PhysicalQuantitiesScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                // Здесь будут поля ввода и кнопки для физических величин
            ]),
        ];
    }

    public function registerScreens()
    {
        // Регистрация экранов
        Screen::register([
            CalculatorScreen::class,
            PhysicalQuantitiesScreen::class,
        ]);
    }

    public function boot()
    {
        $this->registerScreens();
    }
}
