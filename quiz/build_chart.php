<?php
require_once("../../../config.php");

class Chart
{
    private $label1;
    private $label2;
    private $label3;
    private $label4;

    private $value1;
    private $value2;
    private $value3;
    private $value4;

    /**
     * @param $label1
     * @param $label2
     * @param $label3
     * @param $label4
     * @param $value1
     * @param $value2
     * @param $value3
     * @param $value4
     */
    public function __construct()
    {

    }


    public function output($label1, $label2, $label3, $label4, $value1, $value2, $value3, $value4)
    {
        $this->label1 = $label1;
        $this->label2 = $label2;
        $this->label3 = $label3;
        $this->label4 = $label4;
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->value3 = $value3;
        $this->value4 = $value4;

        echo "
    <!DOCTYPE html>
    <hthml>
        <head>
            <meta charset='utf-9'>
            <title></title>
            <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js'></script>-->
            <script src='../js/chartjs/Chart.min.js'></script>
        </head>
        <body>
            <div class='container'>
                <canvas id='barChart'></canvas>
            </div>
            <script>
        const massPopChart = new Chart(barChart, {
                    type: 'bar',
                    data: {
                        labels: ['$this->label1', '$this->label2', '$this->label3', '$this->label4'],
                        datasets: [{
                            label: '# of Votes',
                            data: [$this->value1, $this->value2, $this->value3, $this->value4],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
            });
            </script>
        </body>
    </html> ";
    }

}