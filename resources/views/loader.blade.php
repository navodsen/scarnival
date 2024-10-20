<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scarnival - Agastra Events</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

        <script>
            // Convert PHP data to JSON
            var tables = @json($tables);
            console.log(tables);
        </script>

    </head>
    <body onload="seater()" class="font-pops antialiased bg-gradient-to-b from-zinc-950 to-black text-white">
        <div id="loader" class="flex h-screen">
            {{-- <img src="assets/lantern.png" class="mx-auto w-20 my-auto lg:w-32"> --}}
            <video class="mx-auto w-32 my-auto lg:w-48" autoplay loop muted>
                <source src="assets/lantern.webm" type="video/webm">
                <source src="assets/lantern.hevc.mov" type="video/quicktime">
            </video>
        </div>
        <div id="layout" class="grid grid-flow-row auto-rows-max min-h-screen hidden lg:grid-cols-[2fr_3fr] lg:grid-rows-[1fr_1fr]">
            <div class="row-span-1 mt-8 mb-4 flex flex-col lg:justify-end">
                <div class="lg:ml-32 flex flex-col">
                    <p class="font-mont mx-auto text-xs"><span class="font-bold">AGASTRA EVENTS</span> PRESENTS</p>
                    <img class="w-64 mx-auto mt-2 lg:w-96" src="assets/scarnival.webp" alt="SCARNIVAL Logo">
                    <p class="mx-auto text-xs font-normal">THE SCARIEST PARTY TO GO TO</p>
                </div>
            </div>
            <div class="row-span-1 flex lg:col-span-1 lg:row-span-2 lg:h-[95svh] lg:mt-4">
                <svg class="mx-auto w-screen px-3 py-3 my-auto lg:h-full lg:w-min [&_rect]:" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 2842 3655">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #ffffffcb;
                            }

                            .sold {
                                fill: #ff0000af;
                            }

                            .cls-2 {
                                font-size: 48px;
                                font-family: Poppins-SemiBold, Poppins;
                                font-weight: 600;
                            }
                        </style>
                    </defs>
                    <g id="Layer_2" data-name="Layer 2">
                        <image width="2842" height="3655" xlink:href="assets/layoutimg.webp" />
                        <rect id="rect1" class="cls-1" x="448.65" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(498.85 1275.04) scale(1.03 1)">1</text>

                        <rect id="rect2" class="cls-1" x="578.73" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(623.67 1275.04) scale(1.03 1)">2</text>

                        <rect id="rect3" class="cls-1" x="708.81" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(753.13 1275.04) scale(1.03 1)">3</text>

                        <rect id="rect4" class="cls-1" x="838.89" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(881.67 1275.04) scale(1.03 1)">4</text>

                        <rect id="rect5" class="cls-1" x="968.98" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1012.17 1275.04) scale(1.03 1)">5</text>

                        <rect id="rect6" class="cls-1" x="1099.06" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1142.35 1275.04) scale(1.03 1)">6</text>

                        <rect id="rect7" class="cls-1" x="1229.14" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1274.72 1275.04) scale(1.03 1)">7</text>

                        <rect id="rect8" class="cls-1" x="1359.22" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1402.44 1275.04) scale(1.03 1)">8</text>

                        <rect id="rect9" class="cls-1" x="1489.3" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1532.94 1275.04) scale(1.03 1)">9</text>

                        <rect id="rect10" class="cls-1" x="1619.38" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1653.54 1275.04) scale(1.03 1)">10</text>

                        <rect id="rect11" class="cls-1" x="1749.46" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1790.67 1275.04) scale(1.03 1)">11</text>

                        <rect id="rect12" class="cls-1" x="1879.54" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1915.49 1275.04) scale(1.03 1)">12</text>

                        <rect id="rect13" class="cls-1" x="2009.62" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2044.95 1275.04) scale(1.03 1)">13</text>

                        <rect id="rect14" class="cls-1" x="2139.7" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2173.49 1275.04) scale(1.03 1)">14</text>

                        <rect id="rect15" class="cls-1" x="2269.78" y="1185.76" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2304 1275.04) scale(1.03 1)">15</text>

                        <rect id="rect16" class="cls-1" x="448.65" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(482.96 1424.92) scale(1.03 1)">16</text>

                        <rect id="rect17" class="cls-1" x="578.73" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(615.33 1424.92) scale(1.03 1)">17</text>

                        <rect id="rect18" class="cls-1" x="708.81" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(743.05 1424.92) scale(1.03 1)">18</text>

                        <rect id="rect19" class="cls-1" x="838.89" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(873.55 1424.92) scale(1.03 1)">19</text>

                        <rect id="rect20" class="cls-1" x="968.98" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(997.88 1424.92) scale(1.03 1)">20</text>

                        <rect id="rect21" class="cls-1" x="1099.06" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1135.01 1424.92) scale(1.03 1)">21</text>

                        <rect id="rect22" class="cls-1" x="1229.14" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1259.83 1424.92) scale(1.03 1)">22</text>

                        <rect id="rect23" class="cls-1" x="1359.22" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1389.29 1424.92) scale(1.03 1)">23</text>

                        <rect id="rect24" class="cls-1" x="1489.3" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1517.83 1424.92) scale(1.03 1)">24</text>

                        <rect id="rect25" class="cls-1" x="1619.38" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1648.33 1424.92) scale(1.03 1)">25</text>

                        <rect id="rect26" class="cls-1" x="1749.46" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1778.95 1424.92) scale(1.03 1)">26</text>

                        <rect id="rect27" class="cls-1" x="1879.54" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1907.72 1424.92) scale(1.03 1)">27</text>

                        <rect id="rect28" class="cls-1" x="2009.62" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2040.16 1424.92) scale(1.03 1)">28</text>

                        <rect id="rect29" class="cls-1" x="2139.7" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2169.33 1424.92) scale(1.03 1)">29</text>

                        <rect id="rect30" class="cls-1" x="2269.78" y="1335.64" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2303.17 1424.92) scale(1.03 1)">30</text>

                        <rect id="rect31" class="cls-1" x="448.65" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(483.98 1574.8) scale(1.03 1)">31</text>

                        <rect id="rect32" class="cls-1" x="578.73" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(608.8 1574.8) scale(1.03 1)">32</text>

                        <rect id="rect33" class="cls-1" x="708.81" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(738.26 1574.8) scale(1.03 1)">33</text>

                        <rect id="rect34" class="cls-1" x="838.89" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(866.8 1574.8) scale(1.03 1)">34</text>

                        <rect id="rect35" class="cls-1" x="968.98" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(997.31 1574.8) scale(1.03 1)">35</text>

                        <rect id="rect36" class="cls-1" x="1099.06" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1127.49 1574.8) scale(1.03 1)">36</text>

                        <rect id="rect37" class="cls-1" x="1229.14" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1259.85 1574.8) scale(1.03 1)">37</text>

                        <rect id="rect38" class="cls-1" x="1359.22" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1387.57 1574.8) scale(1.03 1)">38</text>

                        <rect id="rect39" class="cls-1" x="1489.3" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1518.08 1574.8) scale(1.03 1)">39</text>

                        <rect id="rect40" class="cls-1" x="1619.38" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1646.12 1574.8) scale(1.03 1)">40</text>

                        <rect id="rect41" class="cls-1" x="1749.46" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1783.25 1574.8) scale(1.03 1)">41</text>

                        <rect id="rect42" class="cls-1" x="1879.54" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1908.07 1574.8) scale(1.03 1)">42</text>

                        <rect id="rect43" class="cls-1" x="2009.62" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2037.53 1574.8) scale(1.03 1)">43</text>

                        <rect id="rect44" class="cls-1" x="2139.7" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2166.07 1574.8) scale(1.03 1)">44</text>

                        <rect id="rect45" class="cls-1" x="2269.78" y="1485.52" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2296.57 1574.8) scale(1.03 1)">45</text>

                        <rect id="rect46" class="cls-1" x="448.65" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(475.54 1724.68) scale(1.03 1)">46</text>

                        <rect id="rect47" class="cls-1" x="578.73" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(607.91 1724.68) scale(1.03 1)">47</text>

                        <rect id="rect48" class="cls-1" x="708.81" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(735.63 1724.68) scale(1.03 1)">48</text>

                        <rect id="rect49" class="cls-1" x="838.89" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(866.13 1724.68) scale(1.03 1)">49</text>

                        <rect id="rect50" class="cls-1" x="968.98" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(996.14 1724.68) scale(1.03 1)">50</text>

                        <rect id="rect51" class="cls-1" x="1099.06" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1133.27 1724.68) scale(1.03 1)">51</text>

                        <rect id="rect52" class="cls-1" x="1229.14" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1258.09 1724.68) scale(1.03 1)">52</text>

                        <rect id="rect53" class="cls-1" x="1359.22" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1387.55 1724.68) scale(1.03 1)">53</text>

                        <rect id="rect54" class="cls-1" x="1489.3" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1516.09 1724.68) scale(1.03 1)">54</text>

                        <rect id="rect55" class="cls-1" x="1619.38" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1646.59 1724.68) scale(1.03 1)">55</text>

                        <rect id="rect56" class="cls-1" x="1749.46" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1778.07 1724.68) scale(1.03 1)">56</text>

                        <rect id="rect57" class="cls-1" x="1879.54" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1907.73 1724.68) scale(1.03 1)">57</text>

                        <rect id="rect58" class="cls-1" x="2009.62" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2039.11 1724.68) scale(1.03 1)">58</text>

                        <rect id="rect59" class="cls-1" x="2139.7" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2167.11 1724.68) scale(1.03 1)">59</text>

                        <rect id="rect60" class="cls-1" x="2269.78" y="1635.4" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2297.55 1724.68) scale(1.03 1)">60</text>

                        <rect id="rect61" class="cls-1" x="448.65" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(482.96 1874.56) scale(1.03 1)">61</text>

                        <rect id="rect62" class="cls-1" x="578.73" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(607.78 1874.56) scale(1.03 1)">62</text>

                        <rect id="rect63" class="cls-1" x="708.81" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(737.24 1874.56) scale(1.03 1)">63</text>

                        <rect id="rect64" class="cls-1" x="838.89" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(865.79 1874.56) scale(1.03 1)">64</text>

                        <rect id="rect65" class="cls-1" x="968.98" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(996.29 1874.56) scale(1.03 1)">65</text>

                        <rect id="rect66" class="cls-1" x="1099.06" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1126.47 1874.56) scale(1.03 1)">66</text>

                        <rect id="rect67" class="cls-1" x="1229.14" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1258.83 1874.56) scale(1.03 1)">67</text>

                        <rect id="rect68" class="cls-1" x="1359.22" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1386.56 1874.56) scale(1.03 1)">68</text>

                        <rect id="rect69" class="cls-1" x="1489.3" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1517.06 1874.56) scale(1.03 1)">69</text>

                        <rect id="rect70" class="cls-1" x="1619.38" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1648.93 1874.56) scale(1.03 1)">70</text>

                        <rect id="rect71" class="cls-1" x="1749.46" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1786.06 1874.56) scale(1.03 1)">71</text>

                        <rect id="rect72" class="cls-1" x="1879.54" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1910.87 1874.56) scale(1.03 1)">72</text>

                        <rect id="rect73" class="cls-1" x="2009.62" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2040.33 1874.56) scale(1.03 1)">73</text>

                        <rect id="rect74" class="cls-1" x="2139.7" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2168.88 1874.56) scale(1.03 1)">74</text>

                        <rect id="rect75" class="cls-1" x="2269.78" y="1785.28" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2299.38 1874.56) scale(1.03 1)">75</text>

                        <rect id="rect76" class="cls-1" x="448.65" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(478.35 2024.43) scale(1.03 1)">76</text>

                        <rect id="rect77" class="cls-1" x="578.73" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(610.71 2024.43) scale(1.03 1)">77</text>

                        <rect id="rect78" class="cls-1" x="708.81" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(738.43 2024.43) scale(1.03 1)">78</text>

                        <rect id="rect79" class="cls-1" x="838.89" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(868.94 2024.43) scale(1.03 1)">79</text>

                        <rect id="rect80" class="cls-1" x="968.98" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(996.16 2024.43) scale(1.03 1)">80</text>

                        <rect id="rect81" class="cls-1" x="1099.06" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1133.29 2024.43) scale(1.03 1)">81</text>

                        <rect id="rect82" class="cls-1" x="1229.14" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1258.11 2024.43) scale(1.03 1)">82</text>

                        <rect id="rect83" class="cls-1" x="1359.22" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1387.57 2024.43) scale(1.03 1)">83</text>

                        <rect id="rect84" class="cls-1" x="1489.3" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1516.11 2024.43) scale(1.03 1)">84</text>

                        <rect id="rect85" class="cls-1" x="1619.38" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1652.69 2024.43) scale(1.03 1)">85</text>

                        <rect id="rect86" class="cls-1" x="1749.46" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1779.2 2024.43) scale(1.03 1)">86</text>

                        <rect id="rect87" class="cls-1" x="1879.54" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1910.56 2024.43) scale(1.03 1)">87</text>

                        <rect id="rect88" class="cls-1" x="2009.62" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2040.48 2024.43) scale(1.03 1)">88</text>

                        <rect id="rect89" class="cls-1" x="2139.7" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2170.39 2024.43) scale(1.03 1)">89</text>

                        <rect id="rect90" class="cls-1" x="2269.78" y="1935.16" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2299.12 2024.43) scale(1.03 1)">90</text>

                        <rect id="rect91" class="cls-1" x="448.65" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(483.31 2174.31) scale(1.03 1)">91</text>

                        <rect id="rect92" class="cls-1" x="578.73" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(608.13 2174.31) scale(1.03 1)">92</text>

                        <rect id="rect93" class="cls-1" x="708.81" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(737.59 2174.31) scale(1.03 1)">93</text>

                        <rect id="rect94" class="cls-1" x="838.89" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(866.13 2174.31) scale(1.03 1)">94</text>

                        <rect id="rect95" class="cls-1" x="968.98" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(996.64 2174.31) scale(1.03 1)">95</text>

                        <rect id="rect96" class="cls-1" x="1099.06" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1126.82 2174.31) scale(1.03 1)">96</text>

                        <rect id="rect97" class="cls-1" x="1229.14" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1259.18 2174.31) scale(1.03 1)">97</text>

                        <rect id="rect98" class="cls-1" x="1359.22" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1386.9 2174.31) scale(1.03 1)">98</text>

                        <rect id="rect99" class="cls-1" x="1489.3" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1517.41 2174.31) scale(1.03 1)">99</text>

                        <rect id="rect100" class="cls-1" x="1619.38" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1637.51 2174.31) scale(1.03 1)">100</text>

                        <rect id="rect101" class="cls-1" x="1749.46" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1774.64 2174.31) scale(1.03 1)">101</text>

                        <rect id="rect102" class="cls-1" x="1879.54" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1899.46 2174.31) scale(1.03 1)">102</text>

                        <rect id="rect103" class="cls-1" x="2009.62" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2028.92 2174.31) scale(1.03 1)">103</text>

                        <rect id="rect104" class="cls-1" x="2139.7" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2157.46 2174.31) scale(1.03 1)">104</text>

                        <rect id="rect105" class="cls-1" x="2269.78" y="2085.03" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2287.96 2174.31) scale(1.03 1)">105</text>

                        <rect id="rect106" class="cls-1" x="448.65" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(466.93 2324.19) scale(1.03 1)">106</text>

                        <rect id="rect107" class="cls-1" x="578.73" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(599.29 2324.19) scale(1.03 1)">107</text>

                        <rect id="rect108" class="cls-1" x="708.81" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(727.02 2324.19) scale(1.03 1)">108</text>

                        <rect id="rect109" class="cls-1" x="838.89" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(857.52 2324.19) scale(1.03 1)">109</text>

                        <rect id="rect110" class="cls-1" x="968.98" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(994.15 2324.19) scale(1.03 1)">110</text>

                        <rect id="rect111" class="cls-1" x="1099.06" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1131.28 2324.19) scale(1.03 1)">111</text>

                        <rect id="rect112" class="cls-1" x="1229.14" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1256.1 2324.19) scale(1.03 1)">112</text>

                        <rect id="rect113" class="cls-1" x="1359.22" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1385.56 2324.19) scale(1.03 1)">113</text>

                        <rect id="rect114" class="cls-1" x="1489.3" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1514.1 2324.19) scale(1.03 1)">114</text>

                        <rect id="rect115" class="cls-1" x="1619.38" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1644.61 2324.19) scale(1.03 1)">115</text>

                        <rect id="rect116" class="cls-1" x="1749.46" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1774.79 2324.19) scale(1.03 1)">116</text>

                        <rect id="rect117" class="cls-1" x="1879.54" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1907.15 2324.19) scale(1.03 1)">117</text>

                        <rect id="rect118" class="cls-1" x="2009.62" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2034.87 2324.19) scale(1.03 1)">118</text>

                        <rect id="rect119" class="cls-1" x="2139.7" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2165.38 2324.19) scale(1.03 1)">119</text>

                        <rect id="rect120" class="cls-1" x="2269.78" y="2234.91" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2289.7 2324.19) scale(1.03 1)">120</text>

                        <rect id="rect121" class="cls-1" x="448.65" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(475.62 2474.07) scale(1.03 1)">121</text>

                        <rect id="rect122" class="cls-1" x="578.73" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(600.44 2474.07) scale(1.03 1)">122</text>

                        <rect id="rect123" class="cls-1" x="708.81" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(729.9 2474.07) scale(1.03 1)">123</text>

                        <rect id="rect124" class="cls-1" x="838.89" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(858.44 2474.07) scale(1.03 1)">124</text>

                        <rect id="rect125" class="cls-1" x="968.98" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(988.94 2474.07) scale(1.03 1)">125</text>

                        <rect id="rect126" class="cls-1" x="1099.06" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1119.12 2474.07) scale(1.03 1)">126</text>

                        <rect id="rect127" class="cls-1" x="1229.14" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1251.49 2474.07) scale(1.03 1)">127</text>

                        <rect id="rect128" class="cls-1" x="1359.22" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1379.21 2474.07) scale(1.03 1)">128</text>

                        <rect id="rect129" class="cls-1" x="1489.3" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1509.71 2474.07) scale(1.03 1)">129</text>

                        <rect id="rect130" class="cls-1" x="1619.38" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1638.67 2474.07) scale(1.03 1)">130</text>

                        <rect id="rect131" class="cls-1" x="1749.46" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1775.8 2474.07) scale(1.03 1)">131</text>

                        <rect id="rect132" class="cls-1" x="1879.54" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1900.62 2474.07) scale(1.03 1)">132</text>

                        <rect id="rect133" class="cls-1" x="2009.62" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2030.08 2474.07) scale(1.03 1)">133</text>

                        <rect id="rect134" class="cls-1" x="2139.7" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2158.62 2474.07) scale(1.03 1)">134</text>

                        <rect id="rect135" class="cls-1" x="2269.78" y="2384.79" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2289.13 2474.07) scale(1.03 1)">135</text>

                        <rect id="rect136" class="cls-1" x="448.65" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(468.1 2623.95) scale(1.03 1)">136</text>

                        <rect id="rect137" class="cls-1" x="578.73" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(600.46 2623.95) scale(1.03 1)">137</text>

                        <rect id="rect138" class="cls-1" x="708.81" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(728.18 2623.95) scale(1.03 1)">138</text>

                        <rect id="rect139" class="cls-1" x="838.89" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(858.69 2623.95) scale(1.03 1)">139</text>

                        <rect id="rect140" class="cls-1" x="968.98" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(986.73 2623.95) scale(1.03 1)">140</text>

                        <rect id="rect141" class="cls-1" x="1099.06" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1123.86 2623.95) scale(1.03 1)">141</text>

                        <rect id="rect142" class="cls-1" x="1229.14" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1248.68 2623.95) scale(1.03 1)">142</text>

                        <rect id="rect143" class="cls-1" x="1359.22" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1378.14 2623.95) scale(1.03 1)">143</text>

                        <rect id="rect144" class="cls-1" x="1489.3" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1506.68 2623.95) scale(1.03 1)">144</text>

                        <rect id="rect145" class="cls-1" x="1619.38" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1637.18 2623.95) scale(1.03 1)">145</text>

                        <rect id="rect146" class="cls-1" x="1749.46" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1767.36 2623.95) scale(1.03 1)">146</text>

                        <rect id="rect147" class="cls-1" x="1879.54" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1899.73 2623.95) scale(1.03 1)">147</text>

                        <rect id="rect148" class="cls-1" x="2009.62" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2027.45 2623.95) scale(1.03 1)">148</text>

                        <rect id="rect149" class="cls-1" x="2139.7" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2157.95 2623.95) scale(1.03 1)">149</text>

                        <rect id="rect150" class="cls-1" x="2269.78" y="2534.67" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2287.96 2623.95) scale(1.03 1)">150</text>

                        <rect id="rect151" class="cls-1" x="448.65" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(473.88 2773.83) scale(1.03 1)">151</text>

                        <rect id="rect152" class="cls-1" x="578.73" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(598.7 2773.83) scale(1.03 1)">152</text>

                        <rect id="rect153" class="cls-1" x="708.81" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(728.16 2773.83) scale(1.03 1)">153</text>

                        <rect id="rect154" class="cls-1" x="838.89" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(856.7 2773.83) scale(1.03 1)">154</text>

                        <rect id="rect155" class="cls-1" x="968.98" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(987.2 2773.83) scale(1.03 1)">155</text>

                        <rect id="rect156" class="cls-1" x="1099.06" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1117.38 2773.83) scale(1.03 1)">156</text>

                        <rect id="rect157" class="cls-1" x="1229.14" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1249.75 2773.83) scale(1.03 1)">157</text>

                        <rect id="rect158" class="cls-1" x="1359.22" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1377.47 2773.83) scale(1.03 1)">158</text>

                        <rect id="rect159" class="cls-1" x="1489.3" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1507.97 2773.83) scale(1.03 1)">159</text>

                        <rect id="rect160" class="cls-1" x="1619.38" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1637.66 2773.83) scale(1.03 1)">160</text>

                        <rect id="rect161" class="cls-1" x="1749.46" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1774.79 2773.83) scale(1.03 1)">161</text>

                        <rect id="rect162" class="cls-1" x="1879.54" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1899.6 2773.83) scale(1.03 1)">162</text>

                        <rect id="rect163" class="cls-1" x="2009.62" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2029.06 2773.83) scale(1.03 1)">163</text>

                        <rect id="rect164" class="cls-1" x="2139.7" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2157.61 2773.83) scale(1.03 1)">164</text>

                        <rect id="rect165" class="cls-1" x="2269.78" y="2684.55" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2288.11 2773.83) scale(1.03 1)">165</text>

                        <rect id="rect166" class="cls-1" x="448.65" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(467.08 2923.71) scale(1.03 1)">166</text>

                        <rect id="rect167" class="cls-1" x="578.73" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(599.44 2923.71) scale(1.03 1)">167</text>

                        <rect id="rect168" class="cls-1" x="708.81" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(727.17 2923.71) scale(1.03 1)">168</text>

                        <rect id="rect169" class="cls-1" x="838.89" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(857.67 2923.71) scale(1.03 1)">169</text>

                        <rect id="rect170" class="cls-1" x="968.98" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(989.54 2923.71) scale(1.03 1)">170</text>

                        <rect id="rect171" class="cls-1" x="1099.06" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1126.67 2923.71) scale(1.03 1)">171</text>

                        <rect id="rect172" class="cls-1" x="1229.14" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1251.49 2923.71) scale(1.03 1)">172</text>

                        <rect id="rect173" class="cls-1" x="1359.22" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1380.95 2923.71) scale(1.03 1)">173</text>

                        <rect id="rect174" class="cls-1" x="1489.3" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1509.49 2923.71) scale(1.03 1)">174</text>

                        <rect id="rect175" class="cls-1" x="1619.38" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1639.99 2923.71) scale(1.03 1)">175</text>

                        <rect id="rect176" class="cls-1" x="1749.46" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1770.17 2923.71) scale(1.03 1)">176</text>

                        <rect id="rect177" class="cls-1" x="1879.54" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1902.53 2923.71) scale(1.03 1)">177</text>

                        <rect id="rect178" class="cls-1" x="2009.62" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2030.26 2923.71) scale(1.03 1)">178</text>

                        <rect id="rect179" class="cls-1" x="2139.7" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2160.76 2923.71) scale(1.03 1)">179</text>

                        <rect id="rect180" class="cls-1" x="2269.78" y="2834.43" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2287.99 2923.71) scale(1.03 1)">180</text>

                        <rect id="rect181" class="cls-1" x="448.65" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(473.9 3073.59) scale(1.03 1)">181</text>

                        <rect id="rect182" class="cls-1" x="578.73" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(598.72 3073.59) scale(1.03 1)">182</text>

                        <rect id="rect183" class="cls-1" x="708.81" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(728.18 3073.59) scale(1.03 1)">183</text>

                        <rect id="rect184" class="cls-1" x="838.89" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(856.73 3073.59) scale(1.03 1)">184</text>

                        <rect id="rect185" class="cls-1" x="968.98" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(987.23 3073.59) scale(1.03 1)">185</text>

                        <rect id="rect186" class="cls-1" x="1099.06" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1117.41 3073.59) scale(1.03 1)">186</text>

                        <rect id="rect187" class="cls-1" x="1229.14" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1249.77 3073.59) scale(1.03 1)">187</text>

                        <rect id="rect188" class="cls-1" x="1359.22" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1377.49 3073.59) scale(1.03 1)">188</text>

                        <rect id="rect189" class="cls-1" x="1489.3" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1508 3073.59) scale(1.03 1)">189</text>

                        <rect id="rect190" class="cls-1" x="1619.38" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1638 3073.59) scale(1.03 1)">190</text>

                        <rect id="rect191" class="cls-1" x="1749.46" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1775.13 3073.59) scale(1.03 1)">191</text>

                        <rect id="rect192" class="cls-1" x="1879.54" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1899.95 3073.59) scale(1.03 1)">192</text>

                        <rect id="rect193" class="cls-1" x="2009.62" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2029.41 3073.59) scale(1.03 1)">193</text>

                        <rect id="rect194" class="cls-1" x="2139.7" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2157.95 3073.59) scale(1.03 1)">194</text>

                        <rect id="rect195" class="cls-1" x="2269.78" y="2984.31" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2288.46 3073.59) scale(1.03 1)">195</text>

                        <rect id="rect196" class="cls-1" x="448.65" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(467.43 3223.47) scale(1.03 1)">196</text>

                        <rect id="rect197" class="cls-1" x="578.73" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(599.79 3223.47) scale(1.03 1)">197</text>

                        <rect id="rect198" class="cls-1" x="708.81" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(727.51 3223.47) scale(1.03 1)">198</text>

                        <rect id="rect199" class="cls-1" x="838.89" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(858.02 3223.47) scale(1.03 1)">199</text>

                        <rect id="rect200" class="cls-1" x="968.98" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(981.84 3223.47) scale(1.03 1)">200</text>

                        <rect id="rect201" class="cls-1" x="1099.06" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1118.97 3223.47) scale(1.03 1)">201</text>

                        <rect id="rect202" class="cls-1" x="1229.14" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1243.79 3223.47) scale(1.03 1)">202</text>

                        <rect id="rect203" class="cls-1" x="1359.22" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1373.25 3223.47) scale(1.03 1)">203</text>

                        <rect id="rect204" class="cls-1" x="1489.3" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1501.79 3223.47) scale(1.03 1)">204</text>

                        <rect id="rect205" class="cls-1" x="1619.38" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1632.29 3223.47) scale(1.03 1)">205</text>

                        <rect id="rect206" class="cls-1" x="1749.46" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1762.47 3223.47) scale(1.03 1)">206</text>

                        <rect id="rect207" class="cls-1" x="1879.54" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1894.84 3223.47) scale(1.03 1)">207</text>

                        <rect id="rect208" class="cls-1" x="2009.62" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2022.56 3223.47) scale(1.03 1)">208</text>

                        <rect id="rect209" class="cls-1" x="2139.7" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2153.06 3223.47) scale(1.03 1)">209</text>

                        <rect id="rect210" class="cls-1" x="2269.78" y="3134.19" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2289.7 3223.47) scale(1.03 1)">210</text>

                        <rect id="rect211" class="cls-1" x="448.65" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(475.62 3373.34) scale(1.03 1)">211</text>

                        <rect id="rect212" class="cls-1" x="578.73" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(600.44 3373.34) scale(1.03 1)">212</text>

                        <rect id="rect213" class="cls-1" x="708.81" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(729.9 3373.34) scale(1.03 1)">213</text>

                        <rect id="rect214" class="cls-1" x="838.89" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(858.44 3373.34) scale(1.03 1)">214</text>

                        <rect id="rect215" class="cls-1" x="968.98" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(988.94 3373.34) scale(1.03 1)">215</text>

                        <rect id="rect216" class="cls-1" x="1099.06" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1119.12 3373.34) scale(1.03 1)">216</text>

                        <rect id="rect217" class="cls-1" x="1229.14" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1251.49 3373.34) scale(1.03 1)">217</text>

                        <rect id="rect218" class="cls-1" x="1359.22" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1379.21 3373.34) scale(1.03 1)">218</text>

                        <rect id="rect219" class="cls-1" x="1489.3" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1509.71 3373.34) scale(1.03 1)">219</text>

                        <rect id="rect220" class="cls-1" x="1619.38" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1634.03 3373.34) scale(1.03 1)">220</text>

                        <rect id="rect221" class="cls-1" x="1749.46" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1771.16 3373.34) scale(1.03 1)">221</text>

                        <rect id="rect222" class="cls-1" x="1879.54" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(1895.98 3373.34) scale(1.03 1)">222</text>

                        <rect id="rect223" class="cls-1" x="2009.62" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2025.44 3373.34) scale(1.03 1)">223</text>

                        <rect id="rect224" class="cls-1" x="2139.7" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2153.98 3373.34) scale(1.03 1)">224</text>

                        <rect id="rect225" class="cls-1" x="2269.78" y="3284.07" width="118.37" height="133.74" rx="15" />
                        <text class="cls-2" transform="translate(2284.49 3373.34) scale(1.03 1)">225</text>
                    </g>
                </svg>
                {{-- <img src="assets/layouts.svg" alt="3D Layout" class="w-screen px-3 py-3 my-auto"> --}}
                {{-- <img src="assets/layoutimg.png" alt="3D Layout" class="absolute -z-50 w-screen px-3 py-3 my-auto"> --}}
                
                {{-- <div class="absolute grid grid-cols-[repeat(15,minmax(0,1fr))] grid-rows-[repeat(15,minmax(0,1fr))] gap-px">
                    @for ($table = 1; $table < 226; $table++)
                        <div class="bg-gray-500 rounded-sm text-xxs flex w-4 h-5">
                            <p class="mx-auto my-auto">{{ $table }}</p>
                        </div>
                    @endfor
                </div> --}}
            </div>
            <div class="row-span-1 flex flex-col flex-grow lg:justify-start">
                <div class="lg:ml-32 flex flex-col my-auto pt-5 mb-8 lg:my-0">
                    <p class="mx-auto text-2xl font-light"><span class="font-semibold">1st NOV</span>EMBER | <span class="font-semibold">8PM</span> ONWARDS</p>
                    <p class="mx-auto text-2xl font-light">AT <span class="font-semibold">WATERS EDGE</span></p>
                    <p class="mx-auto text-xs font-light mt-5">Contact <span class="font-semibold">0776928857</span> for reservations or more information!</p>
                </div>
            </div>
        </div>
        <script>
            // function seater() {
            //     alert("Image is loaded");
            // };

            function seater() {
                tables.forEach(table => {
                    if (table.active == 1) {
                        document.getElementById('rect'+ table.id).classList.add('sold');
                        document.getElementById('rect'+ table.id).classList.remove('cls-1');
                    }
                });
            }

            setTimeout(() => {
                document.getElementById('loader').classList.add('hidden');
                document.getElementById('layout').classList.remove('hidden');
            }, 5000);
        </script>
    </body>
</html>