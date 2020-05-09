import Home from './components/Home';
import ViewPost from './components/ViewPost';

export default{

    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/view',
            component: ViewPost
        }
    ]
}
