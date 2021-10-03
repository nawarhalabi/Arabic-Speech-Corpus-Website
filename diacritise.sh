#!/bin/bash

# You might need this for CRF++ depending on the platform (probably not needed for windows).
export LD_LIBRARY_PATH=${BASEDIR}/diacritiser/lib/

# Run diacritisation pipeline.
python diacritiser/preprocess.py 5 <&0 | diacritiser/bin/crf_test -m diacritiser/models/l9w5b1lt7wt3 | python diacritiser/postprocess.py >&1
