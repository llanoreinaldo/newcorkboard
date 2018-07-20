import React from 'react';
import { render } from 'react-dom';
import PropTypes from 'prop-types';
import injectSheet from 'react-jss';
import styles from '../Modals/IndexStyles';
import ModalLauncher from '../Modals/Modal Launcher/ModalLauncher';

const App = ({ sheet: { classes } }) =>
    <div className={classes.appWrapper}>

        <ModalLauncher buttonLabel="Create New Board">
            <div className={classes.textModal}>

                <div class="modal" tabindex="-1" role="dialog" id="errorModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Error</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p id="errModalText"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ModalLauncher>

    </div >;

App.propTypes = {
    sheet: PropTypes.object,
    classes: PropTypes.object
};

const StyledApp = injectSheet(styles)(App);

render(<StyledApp />, document.getElementById("errorModal"));
