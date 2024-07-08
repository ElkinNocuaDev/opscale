import Tool from './components/Tool'

Nova.booting((app, store) => {
  Nova.inertia('Fullcalendar', Tool)
})

Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'fullcalendar',
            path: '/fullcalendar',
            component: require('./components/Tool'),
        },
    ])
})
