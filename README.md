# package_dependency_chart
Two level pie chart for a sample npm package "create-react-app".<br/>
<b>index.php</b> reads dependencies from the package folder upto two levels and renders a drilldown pie chart with the following options and data.
<pre>
$('#container').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Package Dependencies for <b>react-app</b>'
        },
    
        legend: {
            enabled: false
        },

        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                }
            }
        },

        series: [
          {
            name:'react-app',
            data: [
              {name:'chalk',y:5,drilldown:'chalk'},
              {name:'commander',y:0},
              {name:'cross-spawn',y:2,drilldown:'cross-spawn'},
              {name:'envinfo',y:3,drilldown:'envinfo'},
              {name:'fs-extra',y:3,drilldown:'fs-extra'},
              {name:'hyperquest',y:3,drilldown:'hyperquest'},
              {name:'semver',y:0},
              {name:'tar-pack',y:8,drilldown:'tar-pack'},
              {name:'tmp',y:1,drilldown:'tmp'},
              {name:'validate-npm-package-name',y:1,drilldown:'validate-npm-package-name'}
              ]
          }
        ],
        drilldown: {
            series: [              
                {
                  name:'chalk', 
                  id:'chalk',
                  data:[
                    {name:'ansi-styles',y:0},
                    {name:'escape-string-regexp',y:0},
                    {name:'has-ansi',y:1, drilldown:'has-ansi'},
                    {name:'strip-ansi',y:1, drilldown:'strip-ansi'},
                    {name:'supports-color',y:0}
                    ]
                  },
                {
                  name:'cross-spawn', 
                  id:'cross-spawn',
                  data:[
                    {name:'lru-cache',y:2, drilldown:'lru-cache'},
                    {name:'which',y:1, drilldown:'which'}
                  ]
                },
                {
                  name:'envinfo', 
                  id:'envinfo',
                  data:[
                    {name:'minimist',y:0},
                    {name:'os-name',y:2, drilldown:'os-name'},
                    {name:'which',y:1, drilldown:'which'}
                  ]
                },
                {
                  name:'fs-extra', 
                  id:'fs-extra',
                  data:[
                    {name:'graceful-fs',y:0},
                    {name:'jsonfile',y:1, drilldown:'jsonfile'},
                    {name:'klaw',y:1, drilldown:'klaw'}
                  ]
                },
                {
                  name:'hyperquest', 
                  id:'hyperquest',
                  data:[
                  {name:'buffer-from',y:0},
                  {name:'duplexer2',y:1, drilldown:'duplexer2'},
                  {name:'through2',y:2, drilldown:'through2'}
                  ]
                },
                {
                  name:'tar-pack', 
                  id:'tar-pack',
                  data:[
                    {name:'debug',y:1, drilldown:'debug'},
                    {name:'fstream',y:4, drilldown:'fstream'},
                    {name:'fstream-ignore',y:3, drilldown:'fstream-ignore'},
                    {name:'once',y:1, drilldown:'once'},
                    {name:'readable-stream',y:4, drilldown:'readable-stream'},
                    {name:'rimraf',y:1, drilldown:'rimraf'},
                    {name:'tar',y:3, drilldown:'tar'},
                    {name:'uid-number',y:0}
                  ]
                },
                {
                  name:'tmp', 
                  id:'tmp',
                  data:[
                  {name:'os-tmpdir',y:0}
                  ]
                },
                {
                  name:'validate-npm-package-name', 
                  id:'validate-npm-package-name',
                  data:[
                    {name:'builtins',y:0}
                  ]
                },
                {
                  name:'has-ansi', 
                  id:'has-ansi',
                  data:[
                    {name:'ansi-regex',y:1}
                  ]
                },
                {
                  name:'strip-ansi', 
                  id:'strip-ansi',
                  data:[
                    {name:'ansi-regex',y:1}
                  ]
                },
                {
                  name:'lru-cache', 
                  id:'lru-cache',
                  data:[
                    {name:'pseudomap',y:1},
                    {name:'yallist',y:1}
                  ]
                },
                {
                  name:'which', 
                  id:'which',
                  data:[
                    {name:'isexe',y:1}
                  ]
                },
                {
                  name:'os-name', 
                  id:'os-name',
                  data:[
                    {name:'macos-release',y:1},
                    {name:'win-release',y:1}
                  ]
                },
                {
                  name:'which', 
                  id:'which',
                  data:[
                    {name:'isexe',y:1}
                  ]
                },
                {
                  name:'jsonfile', 
                  id:'jsonfile',
                  data:[
                    {name:'graceful-fs',y:1}
                  ]
                },
                {
                  name:'klaw', 
                  id:'klaw',
                  data:[
                    {name:'graceful-fs',y:1}
                  ]
                },
                {
                  name:'duplexer2', 
                  id:'duplexer2',
                  data:[
                    {name:'readable-stream',y:1}
                ]
                },
                {
                  name:'through2', 
                  id:'through2',
                  data:[
                    {name:'readable-stream',y:1},
                    {name:'xtend',y:1}
                  ]
                },
                {
                  name:'debug', 
                  id:'debug',
                  data:[
                    {name:'ms',y:1}
                  ]
                },
                {
                  name:'fstream', 
                  id:'fstream',
                  data:[
                    {name:'graceful-fs',y:1},
                    {name:'inherits',y:1},
                    {name:'mkdirp',y:1},
                    {name:'rimraf',y:1}
                  ]
                },
                {
                  name:'fstream-ignore', 
                  id:'fstream-ignore',
                  data:[
                    {name:'fstream',y:1},
                    {name:'inherits',y:1},
                    {name:'minimatch',y:1}
                  ]
                },
                {
                  name:'once', 
                  id:'once',
                  data:[
                    {name:'wrappy',y:1}
                  ]
                },
                {
                  name:'readable-stream', 
                  id:'readable-stream',
                  data:[
                    {name:'core-util-is',y:1},
                    {name:'inherits',y:1},
                    {name:'isarray',y:1},
                    {name:'string_decoder',y:1}
                  ]
                },
                {
                  name:'rimraf', 
                  id:'rimraf',
                  data:[
                    {name:'glob',y:1}
                  ]
                },
                {
                  name:'tar', 
                  id:'tar',
                  data:[
                    {name:'block-stream',y:1},
                    {name:'fstream',y:1},
                    {name:'inherits',y:1}
                  ]
                }
            ]
        },
        tooltip: {
            formatter: function () {
                return 'Dependencies for ' + this.series.name +
                    '</b>: <br/><b>' + this.point.name + '</b> has <b>' + this.y + '</b> dependencies';
            }
        },
    })
</pre>

