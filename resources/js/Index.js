import React from 'react';
import Login from './pages/Login';
import ReactDOM from 'react-dom';
import Layouts from './Layouts';
import Transactions from './pages/Transaction';
import { BrowserRouter as Router, Switch, Route} from 'react-router-dom';
function Index() {
    return (
        <Router>
            <Switch>
                <Route path='/login' exact component={Login}/>
                <Route path='/' exact component={Layouts}/>
                {/* <Route path='/transaction' exact component={Layouts} /> */}
            </Switch>
        </Router>
    )
}

export default Index;

// if (document.getElementById('app')) {
//     ReactDOM.render(<Index />, document.getElementById('app'));
// }