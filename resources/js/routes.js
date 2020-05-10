import Home from './views/Home';
import CreatePost from './views/CreatePost';

export default{

    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/posts/create',
            component: CreatePost
        }
    ]
}
