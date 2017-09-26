// CommitChart.js
import { Doughnut } from 'vue-chartjs'
import axios from 'axios'
import {watchdogData} from './../../config'


export default Doughnut.extend({

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
          {label: 'Hoạt động của tôi', backgroundColor: '#dd4b39', data: this.rows}
        ]
      }, {responsive: true, maintainAspectRatio: false})
    }
  }
})