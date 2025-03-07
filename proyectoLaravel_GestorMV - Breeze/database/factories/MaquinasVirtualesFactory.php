<?php

namespace Database\Factories;

use App\Models\MaquinasVirtuales;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaquinasVirtuales>
 */
class MaquinasVirtualesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = MaquinasVirtuales::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->bothify('VM-##??'),
            'so'=>$this->faker->randomElement(['Windows XP','Windows Vista','Windows 7','Windows 8.1', 'Windows 10', 'Windows 11', 'Ubuntu 14.04 LTS', 'Ubuntu 16.04 LTS', 'Ubuntu 18.04 LTS', 'Ubuntu 20.04 LTS', 'Ubuntu 21.04', 'Debian 8', 'Debian 9', 'Debian 10', 'Debian 11', 'CentOS 6', 'CentOS 7', 'CentOS 8', 'Fedora 32', 'Fedora 33', 'Fedora 34', 'Fedora 35', 'MaxOS X', 'MacOS 11', 'MacOS 12', 'Guadalinex Edu', 'Guadalinex V9', 'Guadalinex V10', 'Guadalinex V11']),
            'ram'=>$this->faker->numberBetween(2, 16),
            'cpu'=>$this->faker->numberBetween(1, 4),
            'discoduro'=>$this->faker->numberBetween(100, 500),
            'tipoRed'=>$this->faker->randomElement(['NAT', 'Adaptador Puente', 'Host-only']),
            'fecha_creacion'=>$this->faker->dateTimeBetween("2020-01-01", "2024-12-31")->format('Y-m-d H:i:s'),
            'id_usuario'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
