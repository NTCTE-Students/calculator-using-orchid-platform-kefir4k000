<?php
namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Label;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use App\Services\Calculator;
use App\Models\User;

class CalculatorScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'result' => session('result')
        ];
    }
public function name(): ?string
{
    return 'Обычный калькулятор!';
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
                Input::make('value1')
                    ->type('number')
                    ->title('Введите значение 1')
                    ->required(),

                Input::make('value2')
                    ->type('number')
                    ->title('Введите значение 2')
                    ->required(),

                Button::make('Вычислить')
                    ->method('calculate'),

                // Вывод результата
                Label::make('result')
                    ->title('Результат')
            ]),
        ];
    }

    public function calculate(Request $request)
    {
        $value1 = $request->input('value1');
        $value2 = $request->input('value2');
        $calculator = new Calculator();

        $result = $calculator->add($value1, $value2);

        // Сохранение результата в сессии
        return redirect()->route('platform.calculator')->with('result', $result);
    }
}
