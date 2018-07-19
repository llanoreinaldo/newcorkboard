import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CollaborateImg extends Component {
    render() {
        return (
            <div className="collaborate-img" >
                <div className="ptext">
                    <span className="border trans">
                        Collaborate
                    </span>
                </div>
            </div >
        );
    }
}

if (document.getElementById('collaborateImg')) {
    ReactDOM.render(<CollaborateImg />, document.getElementById('collaborateImg'));
}
