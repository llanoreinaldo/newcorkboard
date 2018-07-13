import React, { Component } from '../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class Pimg2 extends Component {
    render() {
        return (
            <div className="pimg2">
                <div className="ptext">
                    <span className="border trans">
                        Get Organized
                    </span>
                </div>
            </div>
        );
    }
}

if (document.getElementById('pimg2')) {
    ReactDOM.render(<Example />, document.getElementById('pimg2'));
}
