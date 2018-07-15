import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Section1 extends Component {
    render() {
        return (

            <section className="section section-dark">
                <h2>Create Your Board</h2>
                {/* <!-- Create New Board Code --> */}
                <form id="start-board">
                    <div className="container">
                        <div className="flex-row row justify-content-center">
                            <div className="col-6-md col-12-xs">
                                <input className="new-item form-control" placeholder="Your New Board Name" type="text" id="boardName" required="required"></input>
                            </div>
                            <div className="col-4-md col-12-xs">
                                <input className="new-item form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Your Email" type="email"
                                    id="ownerEmail" required="required"></input>
                            </div>
                            <div className="col-4-md col-12-xs">
                                <input value="Create New Board" type="submit" className="btn btn-primary" data-toggle="modal" id="createBoard"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        );
    }
}

if (document.getElementById('section1')) {
    ReactDOM.render(<Section1 />, document.getElementById('section1'));
}
