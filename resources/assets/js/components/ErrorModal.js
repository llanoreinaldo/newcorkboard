import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ErrorModal extends Component {
    render() {
        return (
            // < !--modal for incorrect board inputs-- >

            <div className="modal" tabindex="-1" role="dialog" id="errorModal">
                <div className="modal-dialog" role="document">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h5 className="modal-title">Error</h5>
                            <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div className="modal-body">
                            <p id="errModalText"></p>
                        </div>
                        <div className="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


        );
    }
}

if (document.getElementById('errorModal')) {
    ReactDOM.render(<ErrorModal />, document.getElementById('errorModal'));
}
