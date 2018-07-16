import React, {
    Component
} from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class Pimg1 extends Component {
    render() {
        return (
        <div className="pimg1" >
            <div><img src="assets/images/cork.png" alt="" className="box-img"></img></div>
                </div>
            );
        }
    }
    
if (document.getElementById('pimg1')) {
                    ReactDOM.render(<Pimg1 />, document.getElementById('pimg1'));
                }