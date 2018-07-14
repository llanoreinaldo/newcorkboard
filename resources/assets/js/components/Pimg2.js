import React, { Component } from 'react';
import ReactDOM from 'react-dom';

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
    ReactDOM.render(<Pimg2 />, document.getElementById('pimg2'));
}
