import Home from './views/Home';
import ViewPost from './views/ViewPost';

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
