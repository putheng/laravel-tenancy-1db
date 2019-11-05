<template>
	<default-layout>
		<div class="page has-sidebar has-sidebar-fixed has-sidebar-expand-xl">
			<div class="page-inner page-inner-fill">
				<nav class="page-navs pr-3">
					<div class="btn-group">
						<button @click.prevent="prev" 
							id="calendar-prev" class="btn btn-secondary">
							<i class="fa fa-chevron-left"></i>
						</button>
						<button @click.prevent="today"
							id="calendar-today" class="btn btn-secondary">Today</button>
						<button  @click.prevent="next"
							id="calendar-next" class="btn btn-secondary">
							<i class="fa fa-chevron-right"></i>
						</button>
					</div>
					<div class="ml-auto">
						<button type="button" class="btn btn-success">Add event</button>
						<button type="button" class="btn btn-secondary d-xl-none" data-toggle="sidebar">
						<i class="fas fa-tasks"></i>
						</button>
					</div>
				</nav>
				<div class="board">
					<div class="card">
						<FullCalendar
							class='dayGridMonth-calendar '
							ref="fullCalendar"
							defaultView="dayGridMonth"
							:header="{
								left: 'title',
								center: '',
								right: 'dayGridMonth,timeGridWeek,timeGridDay'
							}"
							:plugins="calendarPlugins"
							:weekends="calendarWeekends"
							:events="calendarEvents"
							@dateClick="handleDateClick"
							@eventClick="handleEventClick"
					   	/>
					</div>
				</div>
			</div>
			<div class="page-sidebar page-sidebar-fixed">
				<header class="sidebar-header d-sm-none">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">
								<a href="#">
									<i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back
								</a>
							</li>
						</ol>
					</nav>
				</header>
				<div class="sidebar-section-fill">
					<FullCalendar
							class='listMonth-calendar '
							ref="fullCalendarList"
							defaultView="listMonth"
							:plugins="calendarPlugins"
							:weekends="calendarWeekends"
							:events="calendarEvents"
							@dateClick="handleDateClick"
							@eventClick="handleEventClick"
							height="auto"
					   	/>
				</div>
			</div>
		</div>
	</default-layout>
</template>

<script>
	import FullCalendar from '@fullcalendar/vue'
	import dayGridPlugin from '@fullcalendar/daygrid'
	import interactionPlugin from '@fullcalendar/interaction'
	import timeGridPlugin from '@fullcalendar/timegrid'
	import { Calendar } from '@fullcalendar/core'
	import listPlugin from '@fullcalendar/list'

	import { mapGetters, mapActions } from 'vuex'

export default {
	metaInfo: {
		title: 'Calendar'
	},

	mounted(){
		this.calendarApi = this.$refs.fullCalendar.getApi()
		this.calendarListApi = this.$refs.fullCalendarList.getApi()
		this.getEvents()
	},

	components: {
		FullCalendar
	},

	data() {
		return {
			calendarApi: {},
			calendarListApi: {},
			calendarPlugins: [
				dayGridPlugin,
				interactionPlugin,
				timeGridPlugin,
				listPlugin
			],
			calendarWeekends: true,
			calendarEvents: []
		}
	},

	methods: {
		prev(){
			this.calendarApi.prev()
			this.calendarListApi.prev()
		},

		next(){
			this.calendarApi.next()
			this.calendarListApi.next()
		},

		today(){
			this.calendarApi.today()
			this.calendarListApi.today()
		},

		toggleWeekends() {
			this.calendarWeekends = !this.calendarWeekends
		},

		handleDateClick(arg) {

			if (confirm('Would you like to add an event to ' + arg.dateStr + ' ?')) {
				this.calendarEvents.push({
					title: 'New Event',
					start: arg.date,
					allDay: arg.allDay
				})
			}
		},

		handleEventClick(info){
			info.el.style.borderColor = 'red';
		},
		
		getEvents(){
			axios.get('/js/events.json').then((res) => {
				this.calendarEvents = res.data
			})
		}
	}
}
</script>