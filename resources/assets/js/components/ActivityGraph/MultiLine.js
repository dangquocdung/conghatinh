import axios from 'axios'
import {Line} from 'vue-chartjs'
import {watchdogData} from './../../config'

export default Line.extend({

  data () {
    return {
      rows: [],
      labels: []
    }
  },

  mounted () {
    axios.get(watchdogData)
      .then(resp => {
        console.log('resp', resp.data.data)
        this.rows = resp.data.data.rows
        this.labels = resp.data.data.labels
        this.setUpGraph()
      })
  },
  
  methods: {
    setUpGraph() {
      this.renderChart({

        labels: this.labels,
          datasets: [
            {
              label: '# of Votes',
              data: this.rows,
              borderWidth: 1
            },  
            {
              label: '# of Points',
              data: [7, 11, 5, 8, 3, 7],
              borderWidth: 1
            }
          ]
        
      }, {responsive: true, maintainAspectRatio: false})
    }
  }
})

