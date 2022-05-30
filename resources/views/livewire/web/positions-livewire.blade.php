<x-guest-layout>
    @include('livewire.web.nav-menu')
    <div class="container mx-auto p-6 rounded-lg shadow-lg bg-slate-50">
        <div class="py-3 border-b border-gray-300">
            <label class="pr-3">Campeonato</label>
            <select class="form-select">
                <option value="">Champions FIA</option>
            </select>
        </div>
        <table class="table-azul">
            <thead class="bg-indigo-800">
              <tr class="text-white text-center text-sm">
                <th class="py-3">#</th>
                <th>Nombre Equipo</th>
                <th>PJ</th>
                <th>G</th>
                <th>E</th>
                <th>P</th>
                <th>GF</th>
                <th>GC</th>
                <th>DG</th>
                <th>Pts</th>
              </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-200">
            @foreach ($stats as $item)
                <tr class="text-center">
                    <td class="py-3">{{$loop->iteration}}</td>
                    <td class="text-left pl-10">{{$item->team->name}}</td>
                    <td>17</td>
                    <td>14</td>
                    <td>3</td>
                    <td>0</td>
                    <td>40</td>
                    <td>5</td>
                    <td>35</td>
                    <td>45</td>
                </tr>
            @endforeach
              <tr class="text-center">
                <td class="py-3">1</td>
                <td class="text-left pl-10">III ciclo</td>
                <td>17</td>
                <td>14</td>
                <td>3</td>
                <td>0</td>
                <td>40</td>
                <td>5</td>
                <td>35</td>
                <td>45</td>
              </tr>
              <tr class="text-center">
                <td class="py-3">2</td>
                <td class="text-left pl-10">V ciclo</td>
                <td>17</td>
                <td>14</td>
                <td>3</td>
                <td>0</td>
                <td>40</td>
                <td>5</td>
                <td>35</td>
                <td>45</td>
              </tr>
              <tr class="text-center">
                <td class="py-3">3</td>
                <td class="text-left pl-10">IV ciclo</td>
                <td>17</td>
                <td>14</td>
                <td>3</td>
                <td>0</td>
                <td>40</td>
                <td>5</td>
                <td>35</td>
                <td>45</td>
              </tr>
            </tbody>
        </table>
    </div>

</x-guest-layout>
