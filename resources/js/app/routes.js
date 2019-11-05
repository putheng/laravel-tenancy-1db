import file from './file/routes'
import board from './board/routes'
import home from './home/routes'
import calendar from './calendar/routes'
import note from './note/routes'
import feed from './feed/routes'
import chat from './chat/routes'
import auth from './auth/routes'

export default [
	...auth,
	...chat,
	...feed,
	...note,
	...calendar,
	...home,
	...board,
	...file,
	/**/
]